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
Route::get('/create' , [UserController::class, 'create']) ->name('createUser')->middleware('isteacher', 'auth');
Route::post('/', [UserController::class, 'store']) ->name('storeUser')->middleware('isteacher', 'auth');

// R del CRUD
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/home', [UserController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('isteacher', 'auth');

//U DEL CRUD//
Route::get('/edit/{id}' , [UserController::class, 'edit']) ->name('editUser');
Route::patch('/user/{id}', [UserController::class, 'update']) ->name('updateUser')->middleware('isteacher', 'auth');

//Show
Route::get('/show/{id}' , [UserController::class, 'show']) ->name('showUser')->middleware('auth');

//CRUD usuarios Auth Delete
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('isteacher', 'auth');



//U CRUD Grade
Route::get('/edit/{id}' , [GradeController::class, 'edit']) ->name('editGrade');
Route::patch('/Grade/{id}', [GradeController::class, 'update']) ->name('updateGrade');

Route::get('/show/{id}' , [GradeController::class, 'show']) ->name('showGrade');
