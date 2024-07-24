<?php

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

Route::get(
    '/',
    function () {
    return "<h1> Bom dia </h1>";
    //return view('welcome');
});

Route::get('/clientes/{total}/{eita?}', function ($total, $eita = "Nome"){
    return "Ok: $eita";
})->where('total', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/alunos/{xdmomento}', function ($xdmomento){

    $cheiodeXD = array(
        "Shrek",
        "Gato de botas",
        "Burro"
    );
    $msg = "<ul>";
    if ($xdmomento <= count($cheiodeXD) && $xdmomento > 0)
    {
        $cont = 0;
        foreach($cheiodeXD as $item)
        {   
            $msg = $msg . "<li> $item </li>";
            $cont++;
            if ($cont >= $xdmomento) break;
        }
        $msg = $msg . "</ul>";
        //dd($msg);
        return $msg;   
    } 
    else
    {
        return "<h1>Erro</h1>";
    }
});

Route::prefix('consulta')->group(function(){

    Route::get('/', function(){
        return view('Consulta.lista');
    })->name('consulta');
    
    Route::get('/agendar', function (){
        return view('Consulta.agendar');
    })->name('consulta.agendar');

    Route::get('/cancelar', function (){
        return view('Consulta.cancelar');
    })->name('consulta.cancelar');
});

Route::prefix('prova')->group(function(){

    Route::get('/', function(){
        return view('Prova.prova');
    })->name('prova');
    
    Route::get('/aprovado', function (){
        return view('Prova.aprovado');
    })->name('prova.aprovado');

    Route::get('/reprovado', function (){
        return view('Prova.reprovado');
    })->name('prova.reprovado');

    Route::get('/recuperacao', function (){
        return view('Prova.recuperacao');
    })->name('prova.recuperacao');
});



