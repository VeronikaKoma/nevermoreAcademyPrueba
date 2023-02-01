<?php

use Illuminate\Support\Facades\Route;

public function test_anUserCanBeCreate(){
    $this->withExceptionHandling();

    $response = $this->post(route('storeUser'),
    [
    'name' => 'name',
    'surname' => 'surname',
    'email' => 'email',
    'password' => 'password'
    ]);

    $this->assertCount(1, User::all());

}

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

<?php

