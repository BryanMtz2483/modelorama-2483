<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operadores extends Controller
{
    function suma($numero){
        If(!is_numeric($numero)){
            return "Ingresa valor numérico wey";
        }{
            $sum =  $numero + 5;
            return "El resultado de la suma de {$numero} + 5 es: {$sum}";
        }


    }
    function resta($numero){
        If(!is_numeric($numero)){
            return "Ingresa valor numérico wey";
        }{
            $resta =  $numero - 5;
            return "El resultado de la resta de {$numero} - 5 es: {$resta}";
        }
    }
    function multiplicacion($numero){
        If(!is_numeric($numero)){
            return "Ingresa valor numérico wey";
        }{
            $multi =  $numero * 5;
            return "El resultado de la multiplicación de {$numero} * 5 es: {$multi}";
        }
    }
    function division($numero){
        If(!is_numeric($numero) || $numero == 0){
            return "Ingresa valor numérico o uno que no sea 0";
        }{
            $division =  $numero / 5;
            return "El resultado de la suma de {$numero} / 5 es: {$division}";
        }
    }
}
