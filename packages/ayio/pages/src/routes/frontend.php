<?php
use Ayio\Pages\Models\Page;
use Ayio\Ui\Models\Menu;
use Ayio\Ui\Workers\MenuWorker;

Route::get('admin/pages', 'Ayio\Pages\Controllers\AdminController@showPages');
Route::get('admin/pages/add', 'Ayio\Pages\Controllers\AdminController@modifyPage');
Route::post('admin/pages/add', 'Ayio\Pages\Controllers\AdminController@savePage')->name('admin.pages.save');

Route::get('admin/pages/{id}', 'Ayio\Pages\Controllers\AdminController@modifyPage')->where('id', '[0-9]+');
Route::put('admin/pages/{id}', 'Ayio\Pages\Controllers\AdminController@updatePage')->where('id', '[0-9]+')->name('admin.pages.update');
Route::delete('admin/pages/{id}', 'Ayio\Pages\Controllers\AdminController@deletePage')->where('id', '[0-9]+');
Route::put('admin/pages/{id}/delete', 'Ayio\Pages\Controllers\AdminController@undoDeletePage')->where('id', '[0-9]+');


$pages = Page::where('deleted', 0)
->where('disabled', 0)
->orderBy('name')
->get();

foreach($pages as $page) {
    Route::get('{' . $page->url . '}', 'Ayio\Pages\Controllers\FrontEndController@showPage');
}

$menus = [];

$menu = new Menu();
$menu->title = 'Pagina\'s';
$menu->slug = 'pages';
$menu->url = 'admin/pages';
$menu->icon = 'fa fa-file';
$menu->order = 110;
$menu->backend = 1;
$menu->actives = json_encode(['admin/pages', 'admin/pages/add', 'admin/pages/[0-9]+']);
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
