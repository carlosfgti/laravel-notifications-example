<?php

$this->put('notification-all-read', 'NotificationController@markAllAsRead')->name('notification.read.all');
$this->put('notification-read', 'NotificationController@markAsRead')->name('notification.read');
$this->get('notifications', 'NotificationController@notifications')->name('notifications');