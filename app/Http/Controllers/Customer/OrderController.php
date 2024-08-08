<?php

namespace App\Http\Controllers\Customer;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        try {
            $orders = Order::with('userDetails', 'orderDetails.menus', 'merchants')
            ->where('customer_id', Auth::user()->id )
            ->where('status', 'UNPAID')
            ->get();
            // $orders = Order::with('userDetails')->get();
            // dd($orders);
            return view('customer.pages.menus.cart', [
                'getOrder' => $orders
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function addToCart(Request $request, $id)
    {
        try {
            $request->validate([
                'customer_id' => 'required',
                'merchant_id' => 'required',
                'menu_id' => 'required',
                'quantity' => 'required|integer|min:1',
            ]);

            DB::beginTransaction();

            $order = Order::where('customer_id', $request->customer_id)
                          ->where('merchant_id', $request->merchant_id)
                          ->where('status', 'UNPAID')
                          ->first();

            // dd($order);

            if (!$order) {
                $order = Order::create([
                    'customer_id' => $request->customer_id,
                    'merchant_id' => $request->merchant_id,
                    'status' => 'UNPAID',
                    'delivery_at' => $request->delivery_at,
                ]);
            }

            $menu = Menu::findOrFail($id);
            if ($menu->stock < $request->quantity) {
                DB::rollback();
                return redirect()->back()->with('error', 'Not enough stock for menu: ' . $menu->title);
            }

            OrderDetail::create([
                'order_id' => $order->id,
                'menu_id' => $id,
                'quantity' => $request->quantity,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Order successfully added on cart !!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function allOrders()
    {
        try {
            $orders = Order::with('userDetails')->where('customer_id', Auth::user()->id )->get();
            return view('customer.pages.order.index', [
                'getOrder' => $orders
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $order = Order::with(['orderDetails', 'userDetails'])->findOrFail($id);
            return view('customer.pages.order.detail', [
                'getOrder' => $order
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function checkout(Request $request)
    {
        try {
            DB::beginTransaction();

            $orderIds = explode(',', $request->order_ids);

            $orderDetails = OrderDetail::whereIn('order_id', $orderIds)
                                    ->with('menus')
                                    ->get();

            Order::whereIn('id', $orderIds)
                ->where('customer_id', $request->customer_id)
                ->where('status', 'UNPAID')
                ->update([
                    'status' => 'PENDING',
                    'delivery_at' => $request->delivery_at
                ]);

            foreach ($orderDetails as $orderDetail) {
                $menu = $orderDetail->menus;

                if ($menu->stock < $orderDetail->quantity) {
                    DB::rollback();
                    return redirect()->back()->with('error', 'Not enough stock for menu: ' . $menu->title);
                }

                $menu->stock -= $orderDetail->quantity;
                $menu->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Orders successfully checked out! Please wait for further instructions.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
