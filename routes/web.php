<?php

Broadcast::routes();

/**
 * Routes notifications
 */
$this->put('notification-all-read', 'NotificationController@markAllAsRead')->name('notification.read.all');
$this->put('notification-read', 'NotificationController@markAsRead')->name('notification.read');
$this->get('notifications', 'NotificationController@notifications')->name('notifications');


$this->post('comment', 'Products\CommentController@store')->name('comment.store');
$this->get('product/{id}', 'Products\ProductController@show')->name('products.show');
$this->get('products', 'Products\ProductController@index')->name('products.index');

Route::get('/', 'SiteController@index')->name('home');

Auth::routes();
