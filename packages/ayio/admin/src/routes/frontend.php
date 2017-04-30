<?php
use Ayio\Ui\Models\Menu;
use Ayio\Ui\Workers\MenuWorker;

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

Route::get('/admin', 'Ayio\Admin\Controllers\AdminController@index');
Route::get('/admin/dashboard', 'Ayio\Admin\Controllers\AdminController@index');

$menus = [];

$menu = new Menu();
$menu->title = 'Dashboard';
$menu->slug = 'dashboard';
$menu->url = 'admin/dashboard';
$menu->icon = 'fa fa-dashboard';
$menu->order = 100;
$menu->backend = 1;
$menu->actives = json_encode(['admin', 'admin/dashboard']);
$menus[] = $menu->getAttributes();

$menu = new Menu();
$menu->title = 'Logout';
$menu->slug = 'logout';
$menu->url = 'admin/logout';
$menu->icon = 'fa fa-sign-out';
$menu->order = 9999999;
$menu->backend = 1;
$menu->actives = json_encode(['admin/logout']);
$menus[] = $menu->getAttributes();


dispatch(new MenuWorker($menus));
