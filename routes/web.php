<?php

use App\Http\Controllers\API\PhotosApiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\UserController;
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

// task
Route::get('/pelanggan', [PelangganController::class, 'list']);
Route::get('/user-invoke', UserController::class);


Route::resource('/photos', PhotosController::class);
// ->only(["index", "show"]);
// ->except(["create", "store", "update", "destroy"]);
Route::apiResource('/api/photos', PhotosApiController::class);
