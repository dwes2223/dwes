<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudyController;
use App\Http\Controllers\Api\AuthController;

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

// rutas con este prefijo: /api/auth/....
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
    ], function ($router) {
        Route::post('register',  [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me',  [AuthController::class, 'me']);
});



Route::resource('studies', StudyController::class);

Route::fallback(function(){
    return response()->json(['status' => 404, 'message' => 'Recurso no encontrado'], 404);
});
