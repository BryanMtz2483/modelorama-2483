<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Multiplicador extends Controller
{
    function index($numero){
        $multi =  $numero * 5;
        return "El resultado es: {$multi}";

    }
}
