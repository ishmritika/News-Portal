<?php

use App\Http\Controllers\auth\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authMiddleware;

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

// for frontend
Route::get('/', function () {
    return view('welcome');
});




//  for admin
// Route::prefix('/admin')->group(function() {
//     Route::get('/dashboard', function () {
//         return view('admin.layout.master');
//     });

//     Route::get('/login', function() {
//         return view('admin.auth.login');
//     })->name("admin.login");

//     Route::get('/register', function() {
//         return view('admin.auth.register');
//     })->name("admin.register");

//     Route::get('/category/create', function () {
//         return view('admin.category.create');
//     })->name("admin.create");
// });



Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/login', [LoginController::class, 'login'])->name("admin.login");

    Route::get('/register', [RegisterController::class, 'register'])->name("admin.register");

    Route::get('/category/create',[CategoryController::class, 'create'])->name("admin.create");
});