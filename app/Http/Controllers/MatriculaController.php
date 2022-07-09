<?php

namespace App\Http\Controllers;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Models\Curso;

class MatriculaController extends Controller
{
    public function show(){
        $matricula = Curso::all();
        return view("matricula.mostrar")->with("cursos",$matricula);
    }

    public function matriculaForm(){
        return view('matricula.registrar');
    }

    public function procesarForm(Request $request){
        $matricula= new Matricula();
        $matricula->fecha= $request->input("fecha");
        $matricula->id_curso= $request->input("id_curso");
        $matricula->id_user= $request->input("id_user");
        $matricula->save();
        return "guardado";

    }

}
