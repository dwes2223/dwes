<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Route::get('prueba', function() {
    echo "hola mundo";
});

// Route::get('prueba2', 'PruebaController@hola');
Route::get('prueba2', [PruebaController::class, 'hola']);
Route::get('prueba2/{name}', [PruebaController::class, 'saludoCompleto']);
Route::get('saludo', [PruebaController::class, 'saludo']);


Route::get('/studies/filter', [StudyController::class, 'filter']);
Route::resource('studies', StudyController::class)->middleware('auth');
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('photos', PhotoController::class);
// Route::get('photos', [PhotoController::class, 'index']);
// Route::get('photos/create', [PhotoController::class, 'create']);
// Route::get('photos/{id}', [PhotoController::class, 'show']);
// Route::post('photos', [PhotoController::class, 'store']);
// Route::get('photos/{id}/edit', [PhotoController::class, 'edit']);
// Route::put('photos/{id}', [PhotoController::class, 'update']);
// Route::delete('photos/{id}', [PhotoController::class, 'destroy']);

//rutas -> plural
//tablas -> plural
//controladores y modelos -> singular
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
