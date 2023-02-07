<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

// C del CRUD
Route::get('/create' , [UserController::class, 'create']) ->name('createUser');
Route::post('/', [UserController::class, 'store']) ->name('storeUser');

// R del CRUD
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/home', [UserController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//U DEL CRUD//
Route::get('/edit/{id}' , [UserController::class, 'edit']) ->name('editUser');
Route::patch('/user/{id}', [UserController::class, 'update']) ->name('updateUser');

//Show
Route::get('/show/{id}' , [UserController::class, 'show']) ->name('showUser');

//CRUD usuarios Auth Delete
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('isteacher', 'auth');
