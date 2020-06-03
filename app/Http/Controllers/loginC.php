<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class loginC extends Controller
{
    //
    public function loginView(Request $request)
    {
        if ($request->session()->exists('USUARIO_LOGGEADO')) {

            $usserIsLogged = $request->session()->get('USUARIO_LOGGEADO');

            if ($usserIsLogged === 'administrador') {
                // return view('inicio');
                return redirect('/inicio');
            } else {
                //Objectivo
                return view('login');
            }
        } else {
            return view('login');
        }
    }


    ///1. Crear ruta en web.config
    //2. Crear funcion que manja la ruta
    //3. DEstro de la funcion destruir todas las session creadas en el servidor
    //4. redireccionar al login..

    public function loginValidate(Request $request)
    {
        $dbResponseLs = usuarios::where('usuario', '=', $request->user)->limit(1)->get();

        if (count($dbResponseLs) > 0) {

            if (
                $request->user == $dbResponseLs[0]->usuario
                && $request->pasword == $dbResponseLs[0]->password
            ) {
                //Creo session en el servidor 
                $request->session()->put('USUARIO_LOGGEADO', 'administrador');
                //$request->session()->put('USUARIO_ROL', 'ADMINISTRADOR');

                $response = [];
                $response['validacion'] = true;
                $response['tipo'] = 'Administrador';

                // return redirect('/inicio');
                return response()->json($response);
            } else {
                // var_dump('HELLO');
                return response()->json('Datos incorrectos');
            }
        } else {
            // var_dump('HELLO');
            return response()->json('EL usauriio no existe');
        }
    }
}
