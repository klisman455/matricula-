<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MallaCurricular;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MallaCurricularController extends Controller
{
    public function direccionForm(){
        return view('usuario.direccion');
    }
    public function procesarForm(Request $request){
        $request->validate([
            "direccion"=>"required"
        ]);
        $user = User::find(Auth::id());
        $user->direccion =$request->input("direccion");
        $user->remember_token = Hash::make("hola");
        $user->save();
        return redirect(Route("home"));

    }
}
