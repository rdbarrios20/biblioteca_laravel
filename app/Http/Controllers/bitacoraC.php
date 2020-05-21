<?php

namespace App\Http\Controllers;

use App\bitacora;
use Illuminate\Http\Request;

class bitacoraC extends Controller
{
    //
    public function bitacoraView(Request $request){
        $data  = bitacora::get();
        $r = [
            'response'=>'hello world',
            'bitacora'=>$data
            ];
        return view('bitacora')->with($r);
    }

}
