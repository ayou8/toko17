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

Route::get('/', 'BerandaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index');
Route::get('autocomplete', 'ProductController@index');
Route::get('search', 'ProductController@search');
Route::resource('posts','PostsController');
Route::get('troli', function(){

  Cart::add(Request::post('id'), Request::post('nama'),  Request::post('harga'), Request::post('banyak'),Request::post('kategori'));

    return back()->with('status', 'Keranjang Belanja berhasil ditambahkan');

});

Route::get('cart', function(){

      return Cart::clear();

});

Route::get('delete', function() {
	Cart::clear();


});
Route::get('produkdetail/{seo}', 'BerandaController@detail' );
Route::get('kategori/{kategori}', 'ProdukKategoriController@kategori' );
Route::get('kat/{kategori}/{sub}', 'ProdukKategoriController@subkategori' );

Route::get('checkout','ProductController@checkout');
Route::post('checkout','ProductController@newuser');

Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));
Route::get('/cari', 'SearchController@search')->name('cari');
Route::get('propinsi',array('as'=>'propinsi','uses'=>'WilayahController@provinsi'));
Route::get('propinsi/kota/{id}',array('as'=>'myform.ajax','uses'=>'WilayahController@kota'));
Route::post('kota', ['as'=>'kota','uses'=>'WilayahController@kota']);
Route::get('about','AboutController@index');
