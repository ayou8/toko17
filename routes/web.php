<?php

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index');
Route::post('/product/post', 'ProductController@store');
Route::get('autocomplete', 'ProductController@index');
Route::get('search', 'ProductController@search');
Route::resource('posts','PostsController');
Route::post('posts/changeStatus', array('as' => 'changeStatus', 'uses' => 'PostsController@changeStatus'));
Route::get('cart', function(){

// Cart::add(1, 'iPhone 7', 500, 1);
// Cart::add(1, 'iPad Pro', 600, 2);
$a= array('total' => Cart::getTotal(), 'subtotal' => Cart::getSubTotal(),'rincian' => Cart::getContent(), 'banyak' => count(Cart::getContent()));
return $a;

 // return 1900 - 300 = 1600

});

