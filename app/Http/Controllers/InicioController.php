<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function InicioView(Request $request){

        if ($request->session()->exists('USUARIO_LOGGEADO')) {
            
            $usserIsLogged = $request->session()->get('USUARIO_LOGGEADO');

            if($usserIsLogged === 'administrador'){
                return redirect('inicio');
            }else{
                return view('login');
            }
        }else{
            return view('login');
        }
    }

    public function LogoutView(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}

