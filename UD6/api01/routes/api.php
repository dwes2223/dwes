<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function() {
    // return "Bienvenido a la API Laravel 20";
    $data = [
        'status' => 'ok',
        'message' => "Bienvenido a la API Laravel 20",
    ];
    // return $data;
    return response()->json($data, 200);
});


Route::fallback(function () {
    return response()->json(['error' => 'No encontrado'], 404);
  });