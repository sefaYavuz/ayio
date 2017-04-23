<?php
use Ayio\Auth\Models\User;


Route::get('/users', function () {
    return User::create([
            'name' => 'Jane',
            'email' => 'john@jane.com',
            'password' => bcrypt('password'),
        ]);
});

 ?>
