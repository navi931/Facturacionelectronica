<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\URL;
use \App\Conversiones;
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
//Eliminar despues
Route::get('/prueba',['uses'=>'Control@prueba','as'=>'Control.prueba']);


// Route::get('/prueba2', function (Request $request) {
//    return Response::json('validate',201);
// });
