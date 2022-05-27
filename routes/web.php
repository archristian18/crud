<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/crud', CrudController::class);

ROUTE::get('/login', [LoginController::class, 'display']);

ROUTE::post('/login', [LoginController::class, 'homelogin'])->name('home.login');

ROUTE::get('/register', [LoginController::class, 'register'])->name('home.register');


ROUTE::post('/register/create', [RegisterController::class, 'store'])->name('register.create');