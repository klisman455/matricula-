<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MallaCurricular;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MallaCurricularController extends Controller
{

    public function mallaForm(){
        return view('malla.registrar');
    }
    public function procesarrForm(Request $request){
        $mallacurricular= new MallaCurricular();
        $mallacurricular->estado_curso= $request->input("estado_curso");
        $mallacurricular->estado= $request->input("estado");
        $mallacurricular->save();
        return "guardado";

    }
}
