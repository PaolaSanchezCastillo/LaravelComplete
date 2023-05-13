<?php

namespace App\Http\Controllers;


use Mail;
use Illuminate\Http\Request;
use App\Mail\PruebaMail; 
use App\Http\Controllers\PDFController;
use  App\Models\Product;
use PDF; 


class PruebaMailController extends Controller
{
    


public function index(){
    $mailData = [
        'title' => 'Mail from my Laravel App', 
        'body' => 'This is a test from my Laravel App'
    ];

    


    Mail::to('paola@3ct.mx')->send(new PruebaMail($mailData, $adjunto)); 
    echo 'Mensaje enviado';
}

public function pruebaMailAdjunto(){
    $mailData = [
        'mail' =>'paola@3ct.mx',
        'title' => 'Mail from my Laravel App', 
        'body' => 'This is a test from my Laravel App'
    ];

    $product = Product::where('ProductID', 1)->first(); 

    $title = 'Alta de Producto'; 
    $date  =date("Y/m/d");


    $pdf = PDF::loadView('products.altaproducto',
    array('title' =>$title, 'date' =>$date,'product' => $product ));

    Mail::send('mails.adjunt', $mailData, function ($message) use ($mailData, $pdf) {
        $message->to($mailData["mail"])
            ->subject($mailData["title"])
            ->attachData($pdf->output(), "test.pdf");
    });

    dd('Email has been sent successfully');
}





}
