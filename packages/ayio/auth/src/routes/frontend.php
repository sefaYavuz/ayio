<?php

// Authentication Routes...
Route::get('login', 'Ayio\Auth\Controllers\LoginController@showLoginForm')->name('auth.login');
Route::post('login', 'Ayio\Auth\Controllers\LoginController@login');
Route::get('logout', 'Ayio\Auth\Controllers\LoginController@logout')->name('auth.logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


 ?>
