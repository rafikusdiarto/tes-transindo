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
Route::middleware(['auth', 'role:CUSTOMER'])->group(function () {
    Route::get('/customer', function () {
        return view('customer.layouts.app');
    })->name('customer');
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
