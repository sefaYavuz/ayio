<?php
use Ayio\Ui\Models\Menu;
use Ayio\Ui\Workers\MenuWorker;

// Authentication Routes...
Route::get('admin/login', 'Ayio\Auth\Controllers\LoginController@showLoginForm')->name('auth.login');
Route::post('admin/login', 'Ayio\Auth\Controllers\LoginController@login');
Route::get('admin/logout', 'Ayio\Auth\Controllers\LoginController@logout')->name('auth.logout');

Route::get('admin/users', 'Ayio\Auth\Controllers\BackEndController@showUsers');
Route::get('admin/users/add', 'Ayio\Auth\Controllers\BackEndController@modifyUser');
Route::post('admin/users/add', 'Ayio\Auth\Controllers\BackEndController@saveUser')->name('admin.users.save');

Route::get('admin/users/{id}', 'Ayio\Auth\Controllers\BackEndController@modifyUser')->where('id', '[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}');
Route::put('admin/users/{id}', 'Ayio\Auth\Controllers\BackEndController@updateUser')->where('id', '[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}')->name('admin.users.update');
Route::delete('admin/users/{id}', 'Ayio\Auth\Controllers\BackEndController@deleteUser')->where('id', '[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}');
Route::put('admin/users/{id}/delete', 'Ayio\Auth\Controllers\BackEndController@undoDeleteUser')->where('id', '[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}');

$menus = [];

$menu = new Menu();
$menu->title = 'Gebruikers';
$menu->slug = 'gebruikers';
$menu->url = 'admin/users';
$menu->icon = 'fa fa-users';
$menu->order = 1000;
$menu->backend = 1;
$menu->actives = json_encode(['admin/users', 'admin/users/add', 'admin/users/[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}']);
$menus[] = $menu->getAttributes();

dispatch(new MenuWorker($menus));

$menus = [];

$menu = new Menu();
$menu->parent_id = Menu::where('slug', 'gebruikers')->first()->id;
$menu->title = 'Gebruiker toevoegen';
$menu->slug = 'gebruiker_toevoegen';
$menu->url = 'admin/users/add';
$menu->icon = 'fa fa-plus';
$menu->order = 100;
$menu->backend = 1;
$menu->actives = json_encode(['admin/users/add']);
$menus[] = $menu->getAttributes();

dispatch(new MenuWorker($menus));
