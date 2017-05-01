<?php

namespace Ayio\Auth\Controllers;

use Ayio\Admin\Controllers\BaseController;
use Ayio\Auth\Models\User;
use Symfony\Component\HttpFoundation\Request;

class BackEndController extends BaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function showUsers() {
        $users = User::where('deleted', 0)
        ->orderBy('name')
        ->get();

        return view("auth::users.admin.overview", [
            "users" => $users
        ]);
    }

    public function modifyUser($id = null) {
        $user = new User();
        $method = 'POST';
        if($id != null) {
            $user = User::where('deleted', 0)
            ->where('id', $id)
            ->first();
            $method = 'PUT';
        }

        return view("auth::users.admin.modify", [
            "user" => $user,
            "method" => $method
        ]);
    }

    public function saveUser(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|max:255|string',
            'password' => 'required|string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if($user->save()) {
            $request->session()->flash('success', 'De gebruiker is succesvol opgeslagen.');
        } else {
            $request->session()->flash('danger', 'De gebruiker is niet opgeslagen, probeer het opnieuw.');
        }

        return redirect('admin/users/' . $user->id);
    }

    public function updateUser($id, Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|max:255|string',
            'password' => 'required|string',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if($user->save()) {
            $request->session()->flash('success', 'De gebruiker is succesvol opgeslagen.');
        } else {
            $request->session()->flash('danger', 'De gebruiker is niet opgeslagen, probeer het opnieuw.');
        }

        return redirect('admin/users/' . $user->id);
    }

    public function deleteUser($id, Request $request) {
        $user = User::find($id);
        $user->deleted = 1;

        if($user->save()) {
            $request->session()->flash('success', 'De gebruiker is succesvol verwijderd.');
            $request->session()->flash('undo', '/admin/users/' . $user->id . '/delete');
        } else {
            $request->session()->flash('danger', 'De gebruiker is niet verwijderd, probeer het opnieuw.');
        }

        return redirect('admin/users');
    }

    public function undoDeleteUser($id, Request $request) {
        $user = User::find($id);
        $user->deleted = 0;

        if($user->save()) {
            $request->session()->flash('success', 'De gebruiker is succesvol hersteld.');
        } else {
            $request->session()->flash('danger', 'De gebruiker is niet hersteld, probeer het opnieuw.');
        }

        return redirect('admin/users');
    }
}
