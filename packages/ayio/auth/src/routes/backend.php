<?php

// Authentication Routes...
Route::get('admin/login', 'Ayio\Auth\Controllers\LoginController@showLoginForm')->name('auth.login');
Route::post('admin/login', 'Ayio\Auth\Controllers\LoginController@login');
Route::get('admin/logout', 'Ayio\Auth\Controllers\LoginController@logout')->name('auth.logout');
