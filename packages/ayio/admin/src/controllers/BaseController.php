<?php

namespace Ayio\Admin\Controllers;

use Ayio\Ui\Models\Menu;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    use ValidatesRequests;
    
    function __construct() {
        $menuItems = Menu::where('deleted', 0)
        ->where('hidden', 0)
        ->where('backend', 1)
        ->orderBy('parent_id')
        ->orderBy('order')
        ->get();

        $menu = new Menu();
        $menu = $menu->buildMenu($menuItems);

        View::share('menu', $menu);
    }
}
