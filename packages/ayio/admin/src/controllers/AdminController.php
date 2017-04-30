<?php

namespace Ayio\Admin\Controllers;

class AdminController extends BaseController
{
    function __construct() {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index() {
        return view('admin::dashboard');
    }
}
