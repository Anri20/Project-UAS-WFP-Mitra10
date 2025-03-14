<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function () {

    Route::get('/register', 'AuthenticationController@register_create')
        ->name('register.create');

    Route::post('/register', 'AuthenticationController@register_store')
        ->name('register.store');

    Route::get('/login', 'AuthenticationController@create')
        ->name('auth.create');

    Route::post('/login', 'AuthenticationController@store')
        ->name('auth.store');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', 'AuthenticationController@destroy');

    Route::get('/', function () {

        if (request()->user()->isCustomer()) {
            return (new ProductController)->index();
        } else {
            return view('Admin.Home.index');
        }
    })->name('homepage');

    Route::resource('home', 'ProductController');

    Route::resource('brand', 'BrandController');

    Route::resource('category', 'CategoryController');

    Route::post('/category/display', 'CategoryController@displayCategories')
        ->name('displayCategories');

    Route::resource('review', 'ReviewController');

    Route::resource('shop', 'ShopController');

    Route::resource('productstock', 'ProductStockController');

    Route::resource('promos', 'PromoController');

    // Product

    Route::get('/product/admin/index', 'ProductController@indexAdmin')
        ->name('adminIndexProduct');

    Route::post('/getUpdate', 'ProductController@getUpdate')
        ->name('getUpdate');

    Route::get('/createNewProduct', 'ProductController@createProductPage')
        ->name('createNewProduct');

    Route::post('/product/admin/update', 'ProductController@updateProduct')
        ->name('updateProduct');

    Route::post('/product/admin/delete', 'ProductController@deleteProduct')
        ->name('deleteProduct');

    Route::post('/product/get/category', 'ProductController@getProductCategory')
        ->name('getProductCategory');

    Route::post('/product/get/brand', 'ProductController@getBrandCategory')
        ->name('getBrandCategory');

    // Category

    Route::get('/category/admin/index', 'CategoryController@indexAdmin')
        ->name('adminIndexCategory');

    Route::get('/createNewCategory', 'CategoryController@createCategoryPage')
        ->name('createNewCategory');

    Route::post('/category/admin/update', 'CategoryController@updateCategory')
        ->name('updateCategory');

    Route::post('/category/admin/delete', 'CategoryController@deleteCategory')
        ->name('deleteCategory');

    // Brand

    Route::get('/brand/admin/index', 'BrandController@indexAdmin')
        ->name('adminIndexBrand');

    Route::get('/createNewBrand', 'BrandController@createBrandPage')
        ->name('createNewBrand');

    Route::post('/brand/admin/update', 'BrandController@updateBrand')
        ->name('updateBrand');

    Route::post('/brand/admin/delete', 'BrandController@deleteBrand')
        ->name('deleteBrand');

    // Customer

    Route::get('customers/modal/{customer}/edit', 'CustomerController@modal_edit')
        ->name('customer.modal.edit');

    Route::resource('customers', 'CustomerController');

    // Transaction

    Route::get('transactions/popover/{transaction}/items', 'TransactionController@items_popover')
        ->name('transaction.items.popover');

    Route::post('transactions/alert', 'TransactionController@alert')
        ->name('transaction.alert');

    Route::get('/transactions/top', 'TransactionController@top');

    Route::resource('transactions', 'TransactionController');

    // Membership

    Route::resource('membership', 'MembershipController');

    Route::get('/detailmembership/{id}', 'MembershipController@detailbelaja');

    Route::get('/detailitem/{id}', 'MembershipController@detailitem');
});
