<?php

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
use App\Tutoria;
use App\Profesor;
use App\Libro;

Route::get('admin','AdminController@admin');

Route::get('/', function () {
    return view('welcome');
});


Route::get('prueba_tutorias', function()
{
	$lastname_prof = Tutoria::find(1)->profesor;
	return ("Holi--->".$lastname_prof);
});

Route::get('prueba_tutorias2', function()
{
	$tutorias_profe = Profesor::find(1)->tutorias;
	return ("Holi--->".$tutorias_profe);
});

Route::get('libros', function()
{
	$libros = Profesor::find(1)->libros;
	return ("Holi--->".$libros);
});