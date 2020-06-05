<?php

namespace App\Http\Controllers;

use App\Libros;
use Illuminate\Http\Request;

class LibrosC extends Controller
{
    //

    public function InsertLibros(Request $request){
        
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
