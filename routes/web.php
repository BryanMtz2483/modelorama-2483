<?php

use App\Http\Controllers\EjemploVistas;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\Multiplicador;
use App\Http\Controllers\Operadores;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'hello world';
});

Route::get('/uaq', function () {
    return 'hello uaq';
});

Route::get('/uaq/{numero}', [Multiplicador::class, 'index']);

Route::get('/uaq/materia', [MateriaController::class, 'index']);

Route::get('/uaq/{expediente}', function ($expediente) {
    //if ($expediente!="materia")
        return "Bienvenido {$expediente}";

   // return "Bienvenido a la materia";
});

Route::get('/suma/{numero}', [Operadores::class, 'suma']);

Route::get('/resta/{numero}', [Operadores::class, 'resta']);

Route::get('/multiplicacion/{numero}', [Operadores::class, 'multiplicacion']);

Route::get('/division/{numero}', [Operadores::class, 'division']);

Route::get('/index/{nombre}', [EjemploVistas::class, 'index']);

Route::get('/suma', [EjemploVistas::class, 'suma']);