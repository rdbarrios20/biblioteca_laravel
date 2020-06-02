<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function InicioView(Request $request){

        $userIsLogged = $request->session()->get('USUARIO_LOGEADO',true);

        dd($userIsLogged);
        if($userIsLogged){
            return view('inicio');
        }else{
            return view('login');
        }
    }
}
