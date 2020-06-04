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
                return redirect('inicio');
            } else {
                //Objectivo: renderizar la sigueinte vista
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


                if ($dbResponseLs[0]->id_rol == '1') {
                    //Creo session en el servidor 
                    $request->session()->put('USUARIO_LOGGEADO', 'root');

                    $response = [];
                    $response['validacion'] = true;
                    $response['tipo'] = 'Administrador';

                    // return redirect('/inicio');
                    return response()->json($response);
                   
                } elseif ($dbResponseLs[0]->id_rol == '2') {

                    //Creo session en el servidor 
                    $request->session()->put('USUARIO_LOGGEADO', 'administrador');

                    $response = [];
                    $response['validacion'] = true;
                    $response['tipo'] = 'Administrador';

                    // return redirect('/inicio');
                    return response()->json($response);
                } else {
                    //Creo session en el servidor 
                    $request->session()->put('USUARIO_LOGGEADO', 'usuario');

                    $response = [];
                    $response['validacion'] = true;
                    $response['tipo'] = 'usuario';

                    // return redirect('/inicio');
                    return response()->json($response);
                }
            } else {
                // var_dump('HELLO');
                return response()->json('Datos incorrectos');
            }
        } else {
            // var_dump('HELLO');
            return response()->json('EL usuario no existe');
        }
    }
}
