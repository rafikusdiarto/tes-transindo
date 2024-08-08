<?php

use App\Http\Controllers\Merchant\DashboardController;
use App\Http\Controllers\Merchant\InvoiceController;
use App\Http\Controllers\Merchant\MenuCategoryController;
use App\Http\Controllers\Merchant\MenuController;
use App\Http\Controllers\Merchant\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RedirectController;
use App\Http\Controllers\Merchant\ProfileController;

Route::get('/', function () {
    return view('auth.login');
})->name('userLogin');

// Route::get('/redirect', [RedirectController::class, 'index'])->name('redirect');

Route::middleware(['auth', 'role:SUPERADMIN'])->group(function () {
    Route::get('/superadmin', function () {
        return view('superadmin.layouts.app');
    })->name('superadmin');
});
Route::middleware(['auth', 'role:CUSTOMER'])->prefix('customer')->group(function () {
    Route::get('/', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('customer');
    Route::get('/profile/{id}', [App\Http\Controllers\Customer\ProfileController::class, 'index'])->name('editProfileCustomer');
    Route::put('/profile/update/{id}', [App\Http\Controllers\Customer\ProfileController::class, 'update'])->name('updateProfileCustomer');
    Route::get('/menus', [App\Http\Controllers\Customer\MenuController::class, 'index'])->name('menusCustomer');
    Route::get('/orders', [App\Http\Controllers\Customer\OrderController::class, 'allOrders'])->name('allOrdersCustomer');
    Route::get('/orders/detail/{id}', [App\Http\Controllers\Customer\OrderController::class, 'show'])->name('orderDetailCustomer');
    Route::get('/orders/cart', [App\Http\Controllers\Customer\OrderController::class, 'index'])->name('ordersCart');
    Route::post('/orders/cart/{id}', [App\Http\Controllers\Customer\OrderController::class, 'addToCart'])->name('addToCart');
    Route::post('/orders/checkout', [App\Http\Controllers\Customer\OrderController::class, 'checkout'])->name('ordersCheckout');
});

Route::middleware(['auth', 'role:MERCHANT'])->prefix('merchant')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('merchant');
    Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('editProfile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('updateProfile');
    Route::put('/changestatus/{id}', [ProfileController::class, 'changeStatus'])->name('changeStatus');
    Route::get('/menucategories', [MenuCategoryController::class, 'index'])->name('menuCategories');
    Route::post('/menucategories', [MenuCategoryController::class, 'store'])->name('menuCategoriesStore');
    Route::put('/menucategories/update/{id}', [MenuCategoryController::class, 'update'])->name('menuCategoriesUpdate');
    Route::delete('/menucategories/delete/{id}', [MenuCategoryController::class, 'destroy'])->name('menuCategoriesDestroy');
    Route::get('/menus', [MenuController::class, 'index'])->name('menus');
    Route::post('/menus', [MenuController::class, 'store'])->name('storeMenu');
    Route::get('/menus/add', [MenuController::class, 'add'])->name('addMenu');
    Route::get('/menus/edit/{id}', [MenuController::class, 'edit'])->name('editMenu');
    Route::put('/menus/update/{id}', [MenuController::class, 'update'])->name('updateMenu');
    Route::delete('/menus/delete/{id}', [MenuController::class, 'destroy'])->name('destroyMenu');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::put('/orders/{id}', [OrderController::class, 'changeStatus'])->name('changeStatusOrder');
    Route::get('/orders/detail/{id}', [OrderController::class, 'show'])->name('orderDetail');
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('/invoices/detail/{id}', [InvoiceController::class, 'show'])->name('invoiceDetail');
});

require __DIR__.'/auth.php';
