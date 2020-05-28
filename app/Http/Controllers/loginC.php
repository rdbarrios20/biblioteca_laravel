<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class loginC extends Controller
{
    //
    public function loginvalidate(Request $request){
        $data = usuarios::get();
        $datos = [
            'list'=>$data
        ];
        return view('login')->with($datos);
    }
}
