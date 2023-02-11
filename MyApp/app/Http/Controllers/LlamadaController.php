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

}
