<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', function () {
    return view('admin.layout.master');
});


Route::get('/admin/login', function() {
    return view('admin.auth.login');
})->name("admin.login");


Route::get('/admin/register', function() {
    return view('admin.auth.register');
})->name("admin.register");


Route::get('/hi', function () {
    return view('admin.hello');
});
