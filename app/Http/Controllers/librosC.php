<?php

namespace App\Http\Controllers;

use App\Libros;
use Illuminate\Http\Request;

class LibrosC extends Controller
{
    //
    public function LibrosView(){
        $data = Libros::get();
        $libros = [
            'libros'=>$data
        ];
        return view('inventario')->with($libros);
    }
}
