<?php

namespace Ayio\Home\Controllers;

use Ayio\Ui\Models\Menu;
use Illuminate\Http\Request as Controller;

class HomeController extends Controller
{
    public function index() {
        // $menu = new Menu();
        // $menu->title = 'Home';
        // $menu->slug = 'home';
        // $menu->url = '/home';
        // $menu->order = 100;
        // $menu->save();

        return view('home::home');
    }
}
