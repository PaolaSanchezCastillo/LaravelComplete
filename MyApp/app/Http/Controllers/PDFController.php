<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
use PDF; 

class PDFController extends Controller
{
    public function generatePDF(){

         $product = Product::where('ProductID', 1)->first(); 

            $title = 'Alta de Producto'; 
            $date  =date("Y/m/d");
    

        $pdf = PDF::loadView('products.altaproducto',
        array('title' =>$title, 'date' =>$date,'product' => $product ));
        return $pdf;
       
      // return  $pdf->download('AltaProducto.pdf'); 


    }
}
