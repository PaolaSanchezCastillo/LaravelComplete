<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoProveedorController extends Controller
{
    //

    public function index(){

        return view('contactoProveedores.index')->render();
    }
}
