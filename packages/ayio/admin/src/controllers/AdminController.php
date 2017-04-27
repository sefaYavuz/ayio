<?php

namespace Ayio\Admin\Controllers;

use Ayio\Ui\Controllers\BaseController;
use Ayio\Ui\Models\Menu;
use Illuminate\Support\Facades\View;

class AdminController extends BaseController
{
    public function __construct() {
        $this->middleware('auth');

        $menu = Menu::where('deleted', 0)
        ->where('hidden', 0)
        ->where('backend', 1)
        ->orderBy('order')
        ->get();
        View::share('menu', $menu);
    }

    public function index() {
        return view('admin::dashboard');
    }
}
