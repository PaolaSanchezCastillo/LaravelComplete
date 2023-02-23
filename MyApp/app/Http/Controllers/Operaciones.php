<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    // Crear 4 funciones
    // Permitir la entrada de 2 datos (numero1, numero2)
    // dependiendo (suma, resta, division, multiplicacion)
    // Pintar el resultado 

    //    /operaciones/suma/4/5
    //    /operaciones/resta/{numero1}/{numero2}

    //     Resultado de la suma : 9 

    // 1- Crear la funcion dentro del controller
    // 2- Crear la ruta (web) que apunte a esa funcion
    // 3- Crear un blade que pinte el resultado

    function suma($numero1, $numero2){

        $resultado = $numero1 + $numero2; 

        return view('suma', compact('resultado'))' '
    }
   
}
