<?php

namespace App\Http\Controllers;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function show(){
        $matricula =Matricula::all();
        return view("matricula.mostrar")->with("matricula",$matricula);
    }

    public function matriculaForm(){
        return view('matricula.registrar');
    }
}
