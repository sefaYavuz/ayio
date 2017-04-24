<?php

namespace Ayio\Auth\Controllers;

use Ayio\Ui\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index() {
        return view('auth::login');
    }
}
