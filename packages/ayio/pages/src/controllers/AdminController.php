<?php

namespace Ayio\Pages\Controllers;

use Ayio\Pages\Models\Page;
use Ayio\Admin\Controllers\BaseController;
use Illuminate\Http\Request;

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
        ->orderBy('name')
        ->get();

        return view("pages::admin.overview", [
            "pages" => $pages
        ]);
    }

    public function modifyPage($pageId = null) {
        $page = new Page();
        $method = 'POST';
        if($pageId != null) {
            $page = Page::where('deleted', 0)
            ->where('id', $pageId)
            ->first();
            $method = 'PUT';
        }

        return view("pages::admin.modify", [
            "page" => $page,
            "method" => $method
        ]);
    }

    public function savePage(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'url' => 'required|max:255',
            'title' => 'required|max:255'
        ]);

        $page = new Page();
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->url = $request->url;
        $page->title = $request->title;
        $page->content = $request->content;

        if($page->save()) {
            $request->session()->flash('success', 'De pagina is succesvol opgeslagen.');
        } else {
            $request->session()->flash('danger', 'De pagina is niet opgeslagen, probeer het opnieuw.');
        }

        return redirect('admin/pages/' . $page->id);
    }

    public function updatePage($pageId, Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'url' => 'required|max:255',
            'title' => 'required|max:255'
        ]);

        $page = Page::find($pageId);
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->url = $request->url;
        $page->title = $request->title;
        $page->content = $request->content;

        if($page->save()) {
            $request->session()->flash('success', 'De pagina is succesvol opgeslagen.');
        } else {
            $request->session()->flash('danger', 'De pagina is niet opgeslagen, probeer het opnieuw.');
        }

        return redirect('admin/pages/' . $page->id);
    }

    public function deletePage($pageId, Request $request) {
        $page = Page::find($pageId);
        $page->deleted = 1;

        if($page->save()) {
            $request->session()->flash('success', 'De pagina is succesvol verwijderd.');
            $request->session()->flash('undo', '/admin/pages/' . $page->id . '/delete');
        } else {
            $request->session()->flash('danger', 'De pagina is niet verwijderd, probeer het opnieuw.');
        }

        return redirect('admin/pages');
    }

    public function undoDeletePage($pageId, Request $request) {
        $page = Page::find($pageId);
        $page->deleted = 0;

        if($page->save()) {
            $request->session()->flash('success', 'De pagina is succesvol hersteld.');
        } else {
            $request->session()->flash('danger', 'De pagina is niet hersteld, probeer het opnieuw.');
        }

        return redirect('admin/pages');
    }
}
