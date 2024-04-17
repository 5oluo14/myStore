<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BuyingProductController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => ['guest:web']], function () {
    Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');
});


Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('admin-logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::resource('vendors', VendorController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('admins', AdminController::class);
    Route::post('admins/{admin}/pay-salary', [SalaryController::class, 'paySalary'])->name('admins.pay-salary');
    Route::get('profile', [AuthController::class, 'updateProfileView'])->name('admin.profile.view');
    Route::put('profile', [AuthController::class, 'updateProfile'])->name('profile.post');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::put('products/{product}/add-quantity', [ProductController::class, 'addQuantity'])->name('products.add-quantity');
    Route::resource('orders', OrderController::class);
    Route::get('buying-products', [BuyingProductController::class, 'index'])->name('buying-products.index');
    Route::get('reports/product-reports', [ReportController::class, 'productStockReport'])->name('reports.products');
    Route::get('reports/product-min-reports', [ReportController::class, 'productMinStockReport'])->name('reports.products.min');
    Route::get('reports/salary-reports', [ReportController::class, 'salaryReport'])->name('reports.salaries');
    Route::get('reports/deal-with-client-reports', [ReportController::class, 'dealWithClientReport'])->name('reports.dealing');
    Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

});
