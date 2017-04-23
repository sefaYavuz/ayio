<?php

namespace Ayio\Home\Controllers;

use stdClass;
use Ayio\Ui\Controllers\BaseController;
use Ayio\Ui\Workers\MenuWorker;

class HomeController extends BaseController
{
    public function index() {
        $menu = new stdClass();
        $menu->title = 'Home';
        $menu->slug = 'home';
        $menu->url = '/home';
        $menu->order = 100;

        dispatch(new MenuWorker($menu));

        return view('home::home');
    }
}
