<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modelos\personas;

class PersonaController extends Controller
{
        public function todosper($id=null){
            if($id)
                return response()->json(["Persona:"=>personas::find($id)],200);
            return response()->json(["Personas:"=>personas::all()],200);
        }
        public function crearper(Request $request){
            $persona=new personas;
            $persona->nombre=$request->nombre;
            $persona->apellido=$request->apellido;
            $persona->correo=$request->correo;
            $persona->edad=$request->edad;
    
            if($persona->save())
                return response()->json(["Persona registrada:"=>$persona],201);
            return response()->json(null,400);
    
        }
        public function actualizarper(Request $request, $id){
            $persona=new personas;
            $persona=personas::find($id);
            $persona->nombre=$request->nombre;
            $persona->apellido=$request->apellido;
            $persona->correo=$request->correo;
            $persona->edad=$request->edad;
            if($persona->save())
                return response()->json(["Persona actualizada:"=>$persona],201);
            return response()->json(null,400);
        }
        public function borrarper($id){
            $persona=new personas;
            $persona=personas::find($id);
            if($persona->delete())
                return response()->json(["Persona eliminada:"=>$persona],201);
            return response()->json(null,400);
        }
}
