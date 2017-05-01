<?php

namespace Ayio\Pages\Controllers;

use Ayio\Pages\Models\Page;
use Ayio\Admin\Controllers\BaseController;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function showPage($url = 'home') {
        try {
            $page = Page::where('deleted', 0)
                ->where('disabled', 0)
                ->where('url', $url)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            if($url === 'admin') {
                return view('admin::dashboard');
            }

            abort(404);
        }


        return view("pages::frontEnd.overview", [
            "page" => $page
        ]);
    }
}
