<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;


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


ROUTE::resource('/crud', CrudController::class);

ROUTE::get('/login', [LoginController::class, 'display']);
ROUTE::post('/done', [LoginController::class, 'homelogin'])->name('home.login');

ROUTE::post("/logout",[LoginController::class,"store"])->name("logout");


