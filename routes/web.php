<?php

$this->get('products', 'Products\ProductController@index');

Route::get('/', function () {
    return view('welcome');
});
