<?php

namespace Ayio\Ui\Controllers;

use Ayio\Ui\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request as Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        $menu = Menu::where('deleted', 0)
        ->orderBy('order')
        ->get();
        View::share('menu', $menu);
    }
}
