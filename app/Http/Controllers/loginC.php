<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class loginC extends Controller
{
    //
    public function loginView(Request $request){
        return view('login');
    }

    public function loginValidate(Request $request){
        // <var></var>
            // dd($request);
            $dbResponseLs = usuarios::where('usuario','=', $request->user)->limit(1)->get();
            //dd($dbResponseLs);
            if( count($dbResponseLs) > 0){
                //quiere decir que encobntro el dato

                //ahora validamos el passowrd

                // dd($dbResponseLs[0]);
                //dd($dbResponseLs[0]->usuario);
                
                if($request->user == $dbResponseLs[0]->usuario 
                   && $request->pasword == $dbResponseLs[0]->password)
                {   
                    //Creo session terminal en php
                    session('USUARIO_LOGGEADO', true);

                    $response = [];
                    $response['validacion'] = true;
                    $response['tipo'] = 'Administrador';

                    return response()->json($response);
                    dd($response);
                }else{
                    // var_dump('HELLO');
                    return response()->json('Datos incorrectos');
                }
            }else{
                // var_dump('HELLO');
                return response()->json('EL usauriio no existe');
            }


            // $data = usuarios::get();
            // $datos = [
            //     'list'=>$data
            // ];
            // return view('login')->with($datos);
    }
}
