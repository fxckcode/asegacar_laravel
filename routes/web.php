<?php

use illuminate\support\facades\route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

/*
|--------------------------------------------------------------------------
| web routes
|--------------------------------------------------------------------------
|
| here is where you can register web routes for your application. these
| routes are loaded by the routeserviceprovider and all of them will
| be assigned to the "web" middleware group. make something great!
|
*/

route::get('/', function () {
    return view('auth.login');
});


route::get('/home', [HomeController::class, 'index']);

route::resource('/profile', PerfilController::class);

route::get('/register', function () {
    return view('auth.register');
});
