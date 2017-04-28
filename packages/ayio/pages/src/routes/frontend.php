<?php
use Ayio\Ui\Models\Menu;
use Ayio\Ui\Workers\MenuWorker;

Route::get('admin/pages', 'Ayio\Pages\Controllers\AdminController@showPages');
Route::get('admin/pages/add', 'Ayio\Pages\Controllers\AdminController@addPage');

$menus = [];

$menu = new Menu();
$menu->title = 'Pagina\'s';
$menu->slug = 'pages';
$menu->url = 'admin/pages';
$menu->icon = 'fa fa-file';
$menu->order = 110;
$menu->backend = 1;
$menu->actives = json_encode(['admin/pages', 'admin/pages/add']);
$menus[] = $menu->getAttributes();

dispatch(new MenuWorker($menus));

$menus = [];

$menu = new Menu();
$menu->parent_id = Menu::where('slug', 'pages')->first()->id;
$menu->title = 'Pagina toevoegen';
$menu->slug = 'add_page';
$menu->url = 'admin/pages/add';
$menu->icon = 'fa fa-plus';
$menu->order = 100;
$menu->backend = 1;
$menu->actives = json_encode(['admin/pages/add']);
$menus[] = $menu->getAttributes();

dispatch(new MenuWorker($menus));
 ?>
