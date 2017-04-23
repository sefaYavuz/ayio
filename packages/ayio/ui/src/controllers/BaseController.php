<?php

namespace Ayio\Ui\Controllers;

use Ayio\Ui\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request as Controller;

class BaseController extends Controller
{
    public function __construct() {
        $menu = Menu::where('deleted', 0)
        ->orderBy('order')
        ->get();
        View::share('menu', $menu);
    }
}
