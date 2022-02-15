<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/studies/filter', [StudyController::class, 'filter']);
Route::post('/studies/filter', [StudyController::class, 'filter']);
Route::resource('studies', StudyController::class);

Auth::routes();


