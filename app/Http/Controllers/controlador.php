<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{

    public function inicio(){
        return view('welcome');
    }

    public function form(){
        return view('formulario');
    }

    public function table(){
        return view('tabla');
    }

    public function guarda(Request $req){
        
        $req->validate([
            'nombre' => 'required',
            'apunte' => 'required' 
        ]);
        return redirect('1')->with('success','Apunte Guardado');

        
    }
    

}