<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Test";
});

Route::get('/hello', function () {
    echo "Hello World";
});

// task
Route::view('/profile', 'profile', ['name' => 'Kevin Maulana']);

Route::redirect('/mahasiswa', '/profile');

Route::get('profile/{nim}', function ($nim) {
    return "Nim " . $nim;
})->where('nim', '[0-9]+');

// explore
Route::get('user/{name?}', function ($name = "Kevin") {
    return $name;
});

Route::get('/tes-route', function () {
    $route = Route::current();              // object route sekarang
    $name = Route::currentRouteName();      // nama route
    $action = Route::currentRouteAction();  // controller@method

    return [
        'uri' => $route->uri(),
        'name' => $name,
        'action' => $action,
    ];
})->name('tes.route');
