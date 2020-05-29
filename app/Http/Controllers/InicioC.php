<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioC extends Controller
{
    //
    public function InicioView(Request $request){
        return view('inicio');
    }
}
