<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LlamadaController extends Controller
{
    //
    public function index(){
        return 'Index';    
    }

    public function edit($id){
        return 'El id a modificar es ' .$id ; 
    }

    public function showData($nombre, $edad){
       // return view('llamada')->with('dato', $nombre)->with('edad', $edad);
    
        return view('llamada', compact('nombre', 'edad'));
    }


    public function blades(){
        $alumnos = ['Fredy', 'Gerardo', 'Mario', 'Bri', 'Jose', 'Omar']; 

        return view('complementos', compact('alumnos')); 
    }

}
