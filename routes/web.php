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
Route::post('/category/display', 'CategoryController@displayCategories')->name('displayCategories');

Route::resource('review', 'ReviewController');
Route::resource('shop', 'ShopController');
Route::resource('productstock', 'ProductStockController');
Route::resource('promos', 'PromoController');

// ======================================================== Admin ====================================================================
// Home
Route::get('/admin', function () {
    return view('Admin.Home.index');
})->name('home.admin');

// Product
Route::get('/createNewProduct', 'ProductController@createProductPage')->name('createNewProduct');

// Category
Route::get('/createNewCategory', 'CategoryController@createCategoryPage')->name('createNewCategory');

// Brand
Route::get('/brand/admin/index', 'BrandController@indexAdmin')->name('adminIndexBrand');
Route::get('/createNewBrand', 'BrandController@createBrandPage')->name('createNewBrand');
Route::post('/brand/admin/update', 'BrandController@updateBrand')->name('updateBrand');
Route::post('/brand/admin/delete', 'BrandController@deleteBrand')->name('deleteBrand');

// Customer
Route::get('customers/modal/{customer}/edit', 'CustomerController@modal_edit')
    ->name('customer.modal.edit');

Route::resource('customers', 'CustomerController');

// Transaction
Route::get('transactions/popover/{transaction}/items', 'TransactionController@items_popover')->name('transaction.items.popover');
Route::post('transactions/alert', 'TransactionController@alert')->name('transaction.alert');
Route::get('/transactions/top', 'TransactionController@top');
Route::resource('transactions', 'TransactionController');
