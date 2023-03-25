<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ArchivosFotograficosController extends Controller
{
    //

    public function index(){
        return View::make('archivosFotograficos.index');
    }

    public function store(Request $request){
       //
       if($request->file('file')){

        $file =   $request->file('file' ); 
        $nombreArchivoOroginal =  $file->getClientOriginalName();
          $size = $file->getSize(); 

        if($size > 1000000){
            return 'Error: Archivo muy grande';
        }else{

            $file->move('images', $nombreArchivoOroginal); 
        return    $input['path'] = $nombreArchivoOroginal; 
        

        }
 

       }

       


}

}