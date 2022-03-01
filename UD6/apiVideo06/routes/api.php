<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function() {
    // return "Bienvenido a la API Laravel 20";
    $data = [
        'status' => 'ok',
        'message' => 'Bienvenido a la API'
    ];
    return response()->json($data, 200);
});

Route::resource('studies', StudyController::class);

Route::fallback(function(){
    return response()->json(['status' => 404, 'message' => 'Recurso no encontrado'], 404);
});
