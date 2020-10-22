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
//productos
Route::get("/productos","API\ProductoController@todosp");//R todos los productos sin excepción
Route::get("/productos/{id?}","API\ProductoController@todosp")->where("id","[1-100]+");//R muestra producto segun id
Route::post("/productos","API\ProductoController@crear");//C crear un producto
Route::put("/productos/{id}","API\ProductoController@actualizar")->where("id","[1-100]+");//U actualizar producto
Route::delete("/productos/{id}","API\ProductoController@borrar");//D borrar especifico

//comentarios
Route::get("/comentarios","API\ComentarioController@todosc");//R todos los comentarios sin excepcion
Route::get("/comentarios/{id?}","API\ComentarioController@todosc")->where("id","[1-100]+");//R muestra comentario segun id
Route::post("/comentarios","API\ComentarioController@crearc");//C crear comentario
Route::put("/comentarios/{id}","API\ComentarioController@actualizarc")->where("id","[1-100]+");// U actualizar comentario
Route::delete("/comentarios/{id}","API\ComentarioController@borrarc");//D borrar comentario especifico

//personas
Route::get("/personas","API\PersonaController@todosper");//R todas las personas sin excepcion
Route::get("/personas/{id?}","API\PersonaController@todosper")->where("id","[1-100]+");//R muestra  segun id
Route::post("/personas","API\PersonaController@crearper");//C crear persona
Route::put("/personas/{id}","API\PersonaController@actualizarper")->where("id","[1-100]+");// U actualizar personas
Route::delete("/personas/{id}","API\PersonaController@borrarper");//D borrar personas especifico
