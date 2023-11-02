<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopAreaController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\PromosController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportproductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/home');
});

Route::resource('home', 'ProductController');
Route::resource('brand', 'BrandController');
Route::resource('category', 'CategoryController');
Route::resource('review', 'ReviewController');

Route::get('/conquer', function () {
    return view('layout.conquer');
});

Route::resource('shop', ShopController::class);
Route::resource('productstock', ProductStockController::class);
Route::resource('promos', PromosController::class);

Route::resource('shop', 'ShopController');
Route::resource('productstock', 'ProductStockController');
Route::resource('promos', 'PromosController');

Route::resource('transactions', 'TransactionController');