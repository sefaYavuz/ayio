<?php

namespace Ayio\Pages\Controllers;

use Ayio\Pages\Models\Page;
use Ayio\Admin\Controllers\BaseController;

class FrontEndController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function showPage($url) {
        $page = Page::where('deleted', 0)
        ->where('disabled', 0)
        ->where('url', $url)
        ->first();

        return view("pages::frontEnd.overview", [
            "page" => $page
        ]);
    }
}
