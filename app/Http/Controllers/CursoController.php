<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    public function show(){
        $cursos =Curso::all();
        return view("curso.mostrar")->with("cursos",$cursos);
    }

    public function cursoForm(){
            return view('curso.registrar');
    }

    public function procesarForm(Request $request){
        $curso= new Curso();
        $curso->nombre_curso= $request->input("nombre_curso");
        $curso->ciclo= $request->input("ciclo");
        $curso->creditos= $request->input("creditos");
        $curso->horario= $request->input("horario");
        $curso->id_profesor= $request->input("id_profesor");
        $curso->id_mallacurricular= $request->input("id_mallacurricular");
        $curso->id_carrerar= $request->input("id_carrerar");
        return "guardado";

    }

}
