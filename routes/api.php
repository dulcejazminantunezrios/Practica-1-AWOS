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
Route::get("/productos","API\ProductoController@todosp");//R todos los productos sin excepción
Route::get("/productos/{id?}","API\ProductoController@todosp")->where("id","[0-9]+");//C producto con un id opcional(parametro)
Route::post("/productos","API\ProductoController@crear");//C crear un producto
Route::put("/productos/{id}","API\ProductoController@actualizar")->where("id","[0-9]+");//U actualizar datos
Route::delete("productos/{id}","API\ProductoController@borrar");//borrar especifico