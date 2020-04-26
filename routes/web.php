<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addtocart');

Route::get('/cart', 'ProductController@getCart')->name('cart');
Route::get('/cart/order', 'ProductController@getOrder')->name('order');

Auth::routes();

Route::get('/admin/home', 'HomeController@admin')->middleware('admin');
Route::get('/employee/home', 'HomeController@employee')->middleware('employee');
Route::get('/home', 'HomeController@index')->name('home');
