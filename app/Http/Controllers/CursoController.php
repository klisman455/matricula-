<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    public function show(){
        $curso =Curso::all();
        return view("curso.mostrar")->with("cursos",$curso);
    }

    public function cursoForm(){
            return view('curso.registrar');
    }

}
