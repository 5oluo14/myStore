<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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
    Route::get('profile', [AuthController::class, 'updateProfileView'])->name('admin.profile.view');
    Route::put('profile', [AuthController::class, 'updateProfile'])->name('profile.post');
    Route::resource('categories', CategoryController::class);

});




Route::resource('roles', 'RoleController');
Route::resource('sliders', 'SliderController');
Route::resource('policies', 'PolicyController');


Route::resource('products', 'ProductController');

Route::get('admins/toggle-boolean/{id}/{action}', 'AdminController@toggleBoolean')->name('admins.toggleBoolean');
Route::get('services/toggle-boolean/{id}/{action}', 'ServiceController@toggleBoolean')->name('services.toggleBoolean');
Route::get('products/toggle-boolean/{id}/{action}', 'ProductController@toggleBoolean')->name('products.toggleBoolean');
Route::post('update_vendor_ship_price', 'SetPriceController@update')->name('updateGovernoratePackagePrice');




Route::resource('client-cars', 'ClientCarController');
Route::resource('client-addresses', 'ClientAddressController');
Route::resource('brands', 'BrandController');
Route::resource('services', 'ServiceController');
Route::resource('delivery-plans', 'DeliveryPlanController');
Route::resource('orders', 'OrderController');
Route::resource('bookings', 'BookingController');

