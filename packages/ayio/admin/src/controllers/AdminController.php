<?php

namespace Ayio\Admin\Controllers;

use Ayio\Ui\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin::dashboard');
    }
}
