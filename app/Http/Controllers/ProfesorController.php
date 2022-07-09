<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;

class ProfesorController extends Controller
{

    public function mostrar(){
        $profesors = Profesor::all();
        return view("profesor.mostrar")->with("profesors",$profesors);
    }

    public function profesorForm(){
        return view('profesor.registrar');
    }
    public function procesarForm(Request $request){
        $profesor = new Profesor();
        $profesor->nombres= $request->input("nombres");
        $profesor->apellidos= $request->input("apellidos");
        $profesor->direccion= $request->input("direccion");
        $profesor->clave =$request->input("clave");
        $profesor->correo_institucional = $request->input("correo_institucional");
        $profesor->save();
        return "guardrado";

    }

}
