<?php

$this->post('commet', 'Products\CommentController@store')->name('comment.store');

$this->get('product/{id}', 'Products\ProductController@show')->name('products.show');
$this->get('products', 'Products\ProductController@index')->name('products.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
