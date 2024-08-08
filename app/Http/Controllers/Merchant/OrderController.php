<?php

namespace App\Http\Controllers\Merchant;

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
            $orders = Order::with('userDetails')->where('merchant_id', Auth::user()->id )->get();
            return view('merchant.pages.order.index', [
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
            // dd($order);
            return view('merchant.pages.order.detail', [
                'getOrder' => $order
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'customer_id' => 'required',
                'merchant_id' => 'required',
                'menu_id' => 'required',
                'quantity' => 'required|integer|min:1',
            ]);

            DB::beginTransaction();

            $order = Order::create([
                'customer_id' => $request->customer_id,
                'merchant_id' => $request->merchant_id,
                'status' => 'PENDING',
                'delivery_at' => $request->delivery_at,
            ]);

            $totalQuantity = 0;

            foreach ($request->items as $item) {
                $menu = Menu::findOrFail($item['menu_id']);

                if ($menu->stock < $item['quantity']) {
                    DB::rollback();
                    return redirect()->back()->with('error', 'Not enough stock for menu: ' . $menu->title);
                }

                OrderDetail::create([
                    'order_id' => $order->id,
                    'menu_id' => $item['menu_id'],
                    'quantity' => $item['quantity'],
                ]);

                $menu->update([
                    'stock' => $menu->stock - $item['quantity'],
                ]);

                $totalQuantity += $item['quantity'];
            }

            DB::commit();

            return redirect()->back()->with('success', 'Order successfully created. Please wait !!');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    public function changeStatus(Request $request, $id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->update([
                'status' => $request->status
            ]);
            $message = ($request->status == 'DELIVERED') ? 'Order is successfully on process' : 'Order is canceled';
            session()->flash('success', $message);
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            session()->flash('error', $errorMessage);
            return response()->json([
                'success' => false,
                'message' => $errorMessage,
            ]);
        }
    }
}
