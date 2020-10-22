<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modelos\comentarios;
class ComentarioController extends Controller
{
    //
    public function todosc($id=null){
        if($id)
            return response()->json(["Comentario"=>comentarios::find($id)],200);
        return response()->json(["Comentarios"=>comentarios::all()],200);
    }
    public function crearc(Request $request){
        $com=new comentarios;
        $com->titulo=$request->titulo;
        $com->cuerpo=$request->cuerpo;
        $com->producto_id=$request->producto_id;

        if($com->save())
            return response()->json(["Comentario creado"=>$com],201);
        return response()->json(null,400);

    }
    public function actualizarc(Request $request, $id){
        $com=new comentarios;
        $com=comentarios::find($id);
        $com->titulo=$request->titulo;
        $com->cuerpo=$request->cuerpo;
        $com->producto_id=$request->producto_id;
        if($com->save())
            return response()->json(["Comentario actualizado:"=>$com],201);
        return response()->json(null,400);
    }
    public function borrarc($id){
        $com=new comentarios;
        $com=comentarios::find($id);
        if($com->delete())
            return response()->json(["Comentario eliminado"=>$com],200);
        return response()->json(null,400);
    }
}
