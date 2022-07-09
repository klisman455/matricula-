<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function mallaForm(){
        return view('carrera.registrar');
    }
    public function procesarForm(Request $request){
        $carrera= new Carrera();
        $carrera->descripcion= $request->input("descripcion");
        return "guardado";

    }
}
