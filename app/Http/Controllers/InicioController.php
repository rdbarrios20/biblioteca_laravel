<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function InicioView(Request $request){
        if ($request->session()->exists('USUARIO_LOGGEADO')) {
            
            $usserIsLogged = $request->session()->get('USUARIO_LOGGEADO');
            // dd($usserIsLogged);
            if($usserIsLogged === 'administrador'){
                //Objectivo: renderizar la sigueinte vista
                return view('inicio');
            }else{
                return redirect('/login');
            }
        }else{
            // return view('login');
            return redirect('/login');
        }
    }

    public function LogoutView(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}

