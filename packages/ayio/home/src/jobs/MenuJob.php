<?php

namespace Ayio\Home\Jobs;

use stdClass;
use Ayio\Ui\Workers\MenuWorker;

class MenuJob {
    public function run() {
        $menu = new stdClass();
        $menu->title = 'Home';
        $menu->slug = 'home';
        $menu->url = '/home';
        $menu->order = 100;

        dispatch(new MenuWorker($menu));
    }
}
