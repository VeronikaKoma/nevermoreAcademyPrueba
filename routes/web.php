<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//U DEL CRUD//
Route::get('/edit/{id}' , [UserController::class, 'edit']) ->name('editUser');
Route::patch('/user/{id}', [UserController::class, 'update']) ->name('updateUser');
//Fin del U DEL CRUD//

//SHOW DEL CRUD//
Route::get('/show/{id}' , [UserController::class, 'show']) ->name('showUser');
//Fin del SHOW DEL CRUD//