<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopAreaController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\PromosController;
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

Route::resource('shop', 'ShopController');
// Route::resource('shoparea', 'ShopAreaController');
Route::resource('productstock', 'ProductStockController');
Route::resource('promos', 'PromosController');

Route::resource('transactions', 'TransactionController');

// ===============================================================================

Route::get('/dashboard/week6', 'ProductController@week6')->name('dashboard.week6');
Route::get('/dashboard/stock/week6', 'ProductController@week6Stock')->name('dashboard.stock.week6');

Route::get('/category/tugas/week4', 'CategoryController@week4')->name('categoryweek4');
// Route::get('/category/tugas/week5', 'CategoryController@week5')->name('categoryweek5');
Route::get('/report/category/avgprice', 'CategoryController@reportCatAvgPrice')->name('reportCatAvgPrice');
Route::get('/category/tugas/week6', 'CategoryController@week6')->name('category.week6');
Route::get('/category/stock/week6', 'CategoryController@week6Stock')->name('category.stock.week6');

Route::get('/brand/tugas/week4', 'BrandController@week4')->name('brandweek4');
Route::get('/brand/tugas/week5', 'BrandController@week5')->name('brandweek5');
Route::get('/brand/tugas/week6', 'BrandController@week6')->name('brand.week6');
Route::get('/brand/stock/week6', 'BrandController@week6Stock')->name('brand.stock.week6');
