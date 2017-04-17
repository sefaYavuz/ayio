<?php

namespace Ayio\Ui\Controllers;

use Illuminate\Http\Request as Controller;

class UiController extends Controller
{
    public function index() {
        return view('ui::main');
    }
}
