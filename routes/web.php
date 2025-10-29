<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

// For Routing Pages
Route::get('/', function () {
    return view('index');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('index');
});
// For Routing Pages End

// Controller
Route::post('/login_action',[indexController::class, 'login_action']);

Route::post('/sign_up_action',[indexController::class, 'sign_up_action']);
// Controller End