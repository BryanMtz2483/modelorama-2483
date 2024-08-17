<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploVistas extends Controller
{
    function index($nombre){
        return view('Calculator.index',compact('nombre'));
    }
    function suma(){
        return view('Calculator.suma');
    }
}
