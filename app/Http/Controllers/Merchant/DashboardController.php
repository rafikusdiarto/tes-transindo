<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $totalMenuSales = OrderDetail::whereHas('orders', function ($query) {
                $query->where('status', 'DELIVERED')->where('merchant_id', Auth::user()->id);
            })->sum('quantity');
            // dd($totalMenuSales);

            $totalIncome = OrderDetail::join('menus', 'order_details.menu_id', '=', 'menus.id')
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->where('orders.status', 'DELIVERED')
                    ->where('orders.merchant_id', Auth::user()->id)
                    ->sum(DB::raw('order_details.quantity * menus.price'));
            // dd($totalIncome);

            $salesPerCategory = OrderDetail::join('menus', 'order_details.menu_id', '=', 'menus.id')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->join('menu_categories', 'menus.menu_category_id', '=', 'menu_categories.id') // Use menu_category_id as the foreign key
            ->select('menu_categories.name as category_name', DB::raw('SUM(order_details.quantity) as total_sold'))
            ->where('orders.status', 'DELIVERED')
            ->where('orders.merchant_id', Auth::user()->id)
            ->groupBy('menu_categories.name')
            ->get();

            $totalOrders = Order::where('merchant_id', Auth::user()->id)->count();
            return view('merchant.pages.dashboard.index', compact('totalMenuSales', 'totalIncome', 'totalOrders', 'salesPerCategory'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
