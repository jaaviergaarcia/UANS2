<?php

Use App\Patente;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('admin','AdminController@admin');

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba_patente', function(){
	$patente= Patente::find(1);
	return ('Consulta'.$patente);
});

Route::get('prueba_patente', function(){
	$patente= Patente::find(1);
	return ('Consulta'.$patente);
});
