<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('home', [HomeController::class, 'showHome']);
Route::get('menu', [HomeController::class, 'showMenu']);
Route::get('stuff', [HomeController::class, 'showStuff']);
Route::get('contact', [HomeController::class, 'showContact']);

Route::get('test/{menu2}', [HomeController::class, 'test']);
 
Route::resource('menu2', menu2Controller::class);
Route::resource('stuff2', stuff2Controller::class);


Route::get('register', [AuthController::class, 'showRegister']);

Route::get('template', [HomeController::class, 'showTemplate']);
Route::get('menu2', [MenuController::class, 'index']);
Route::get('menu2/create', [MenuController::class, 'create']);
Route::post('menu2', [MenuController::class, 'store']);
Route::get('menu2/{menu2}', [MenuController::class,'show']);
Route::get('menu2/{menu2}/edit', [MenuController::class,'edit']);
Route::put('menu2/{menu2}', [MenuController::class,'update']);
Route::delete('menu2/{menu2}', [MenuController::class,'destroy']);


Route::get('template', [HomeController::class, 'showTemplate']);
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class,'show']);
Route::get('user/{user}/edit', [UserController::class,'edit']);
Route::put('user/{user}', [UserController::class,'update']);
Route::delete('user/{user}', [UserController::class,'destroy']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'logoinProcess']);

