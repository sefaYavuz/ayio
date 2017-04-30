<?php

namespace Ayio\Home\Controllers;

use stdClass;
use Ayio\Ui\Controllers\BaseController;
use Ayio\Ui\Workers\MenuWorker;

class HomeController extends BaseController
{

    public function index() {

        return view('home::home');
    }
}
