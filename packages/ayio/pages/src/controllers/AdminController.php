<?php

namespace Ayio\Pages\Controllers;

use Ayio\Pages\Models\Page;
use Ayio\Admin\Controllers\BaseController;

class AdminController extends BaseController
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

    public function showPages() {
        $pages = Page::where('deleted', 0)
        ->where('disabled', 0)
        ->orderBy('name')
        ->get();

        return view("pages::admin.overview", [
            "pages" => $pages
        ]);
    }

    public function addPage($page = null) {
        return view("pages::admin.modify", [
            "page" => $page
        ]);
    }
}
