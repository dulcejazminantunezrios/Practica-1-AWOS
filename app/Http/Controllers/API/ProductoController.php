<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modelos\productos;

class ProductoController extends Controller
{
    //
    public function todosp($id=null){
        if($id)
            return response()->json(["producto"=>productos::find($id)],200);
        return response()->json(["productos"=>productos::all()],200);
    }
    public function crear(Request $request){
        $prod=new productos;
        $prod->nombre_p=$request->nombre_p;
        $prod->descripcion=$request->descripcion;
        $prod->precio=$request->precio;

        if($prod->save())
            return response()->json(["producto"=>$prod],201);
        return response()->json(null,400);

    }
    public function actualizar(Request $request, $id){
        $prod=new productos;
        $prod=productos::find($id);
        $prod->nombre_p=$request->nombre_p;
        $prod->descripcion=$request->descripcion;
        $prod->precio=$request->precio;
        if($prod->save())
            return response()->json(["actualizar producto"=>$prod],201);
        return response()->json(null,400);
    }
    public function borrar($id){
        $prod=new productos;
        $prod=productos::find($id);
        if($prod->delete())
            return response()->json(["Producto eliminado:"=>$prod],200);
        return response()->json(null,400);
    }
}