<?php

namespace App\Http\Controllers;

use App\bitacora;
use Illuminate\Http\Request;

class BitacoraC extends Controller
{
    //
    public function bitacoraView(Request $request){
        $data  = Bitacora::get();
        $r = [
            'response'=>'hello world',
            'bitacora'=>$data
            ];
        return view('bitacora')->with($r);
    }

}
