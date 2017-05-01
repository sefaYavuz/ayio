<?php
Route::get('/', 'Ayio\Pages\Controllers\FrontEndController@showPage');
Route::get('{slug}', 'Ayio\Pages\Controllers\FrontEndController@showPage');
