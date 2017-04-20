<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
      $users = [
        '0' => [
          'first_name' => 'Abdel',
          'last_name' => 'xD',
          'location' => 'welloe',
        ],
        '1' => [
          'first_name' => 'Moccalina',
          'last_name' => 'Pixded',
          'location' => 'ookwelloe',
        ]
      ];

      return view('admin.users.index', compact('users'));
    }

    public function create()
    {
      return 'creatings';
    }

    public function store()
    {
      # code...
    }
}
