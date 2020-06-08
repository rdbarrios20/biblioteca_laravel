<?php

namespace App\Http\Controllers;

use App\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibrosC extends Controller
{
    public function InsertLibros(Request $request){
        if($request('codigo') !==''){
            DB::table('libros')->insert(
                [
                    'codigo_libro' => $request('codigo'),
                    'autor' => $request('autor'),
                    'nombre_libro' => $request('nombre_libro'),
                    'fecha_expedicion' => $request('fecha_expedicion'),
                    'disponibilidad' => $request('disponibilidad'),
                    'precio_publico' => $request('precio_publico'),
                    'precio_interno' => $request('precio_interno'),
                    'reservado' => $request('reservado'),
                    'cantidad' => $request('cantidad'),
                    'id_categoria' => $request('id_categoria'),
                ]
            );

            $response = [];
            $response['success'] = true;
            $response['message'] = 'Datos guardados exitosamente';
        }
        else{
            return ('No se pudieron registrar los datos verifiquelos e intente de nuevo');
        }
    }

    public function LibrosView(Request $request){
        return view('libros');
    }

    public function InventarioView(){
        $data = libros::get();
        $libros = [
            'libros'=>$data
        ];
        return view('inventario')->with($libros);
    }

}
