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
Use App\Patente;
use App\Desarrollo;
use App\Trabajo;
use App\Articulo;
use App\Distincion;
Use App\Informe;
use App\Resenia;


//rutas para los middleware
/*
Route::get('RutaMiddle', ['middleware' => 'Prueba_middle', function(){
    return '<h1>Hey everybody this shit is vvorking!!</h1>';
}]); */

/*route::get('vista','controlador@nombre_de_funcion:')*/

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function(){
	return view('login');
});


Route::get('admin','AdminController@admin');
Route::get('ver_articulo','AdminController@ver_articulo');


/*PARA EL MODELO DE PROFESOR-USUARIO*/
Route::get('nuevo_profesor','UsuarioController@nuevo_profesor');
Route::post('guardar_profesor','UsuarioController@guardar_profesor');


/*PARA EL MODELO DE ARTICULO*/

//Route::get('articulo','AdminController@articulo');
Route::get('nuevo_articulo','ArticuloController@nuevo_articulo');
Route::post('guardar_articulo','ArticuloController@guardar_articulo');


/*PARA EL MODELO DE DISTINCION*/
Route::get('nueva_distincion','DistincionController@nueva_distincion');
Route::post('guardar_distincion','DistincionController@guardar_distincion');



/*PARA EL MODELO DE INFORME*/
Route::get('nuevo_informe','InformeController@nuevo_informe');
Route::post('guardar_informe','InformeController@guardar_informe');

/*PARA EL MODELO DE LIBRO*/

Route::get('nuevo_libro','LibroController@nuevo_libro');
Route::post('guardar_libro','LibroController@guardar_libro');







/* PARA EL MODELO DE DESARROLLO*/
Route::get('nuevo_desarrollo','DesarrolloController@nuevo_desarrollo');
Route::post('guardar_desarrollo','DesarrolloController@guardar_desarrollo');




/*****************************************/
//Route::get('user','AdminController@usuario');
Route::get('libro','AdminController@libro');
Route::get('informe','AdminController@informe');
Route::get('distincion','AdminController@distincion');
Route::get('desarrollo','AdminController@desarrollo');
Route::get('resena','AdminController@resena');
Route::get('patente','AdminController@patente');
Route::get('trabajo','AdminController@trabajo');






















//Uno a Muchos
/*:::::::P A T E N T E ::::::::::::.:::*/
/*Route::get('patente', function(){
	$patente= Patente::find(1);
	return ('Consulta:'.$patente);
});
Route::get('patente_profesor', function(){
	$patente= Patente::find(1)->profesor;
	return ('Consulta: '.$patente);
});
Route::get('profesor_patente', function(){
	$patente= Profesor::find(1)->patentes;
	return ('Consulta: '.$patente);
});
/*:::::::D E S A R R O L L O::::::::::::.:::*/
/*Route::get('desarrollo', function(){
	$desarrollo= Desarrollo::find(1);
	return ('Consulta:'.$desarrollo);
}); */

/*
Route::get('desarrollo_profesor', function(){
	$desarrollo= Desarrollo::find(1)->profesor;
	return ('Consulta: '.$desarrollo);
});
Route::get('profesor_desarrollo', function(){
	$desarrollo= Profesor::find(1)->desarrollos;
	return ('Consulta: '.$desarrollo);
});
/*:::::::T R A B A J O::::::::::::.:::*/
/*
Route::get('trabajo', function(){
	$trabajo= Trabajo::find(1);
	return ('Consulta:'.$trabajo); 
});

Route::get('trabajo_profesor', function(){
	$trabajo= Trabajo::find(1)->profesor;
	return ('Consulta: '.$trabajo);
});
Route::get('profesor_trabajo', function(){
	$trabajo= Profesor::find(1)->trabajos;
	return ('Consulta: '.$trabajo);
});

//Relacion Muchos a Muchos
/*:::::::A R T I C U L O::::::::::::.:::*/
Route::get('articulos',function()
{
	$articulo = Articulo::find(1);
	return('Consulta: '.$articulo);

});

Route::get('articulos_profesor',function(){
 	$x = Articulo::find(1)->profesores;
 	return('Consulta: '.$x);

});

Route::get('profesores_articulo',function(){
 	$x = Profesor::find(1)->articulos;
 	return('Consulta: '.$x);

});



/*:::::::D I S T I N C I O N::::::::::::.:::*/
/*Route::get('distincion',function(){
	$x = Distincion::find(1);
	return('Consulta: '.$x);

});*/

Route::get('distinciones_profesor',function(){
 	$x = Distincion::find(1)->profesores;
 	return('Consulta: '.$x);

});

Route::get('profesores_distincion',function(){
 	$x = Profesor::find(1)->distinciones;
 	return('Consulta: '.$x);

});
/*:::::::I N F O R M E::::::::::::.:::*/
/*Route::get('informe', function(){
	$x = Informe::find(1);
	return('Consulta:' .$x);

}); */

Route::get('informe_prof', function(){
	$x = Informe::find(1)->profesores;
	return('Consulta:' .$x);

});

Route::get('profes_informe', function(){
	$x = Profesor::find(1)->informes;
	return('Consulta:' .$x);

});

/*:::::::R E S E N I A S ::::::::::::.:::*/
Route::get('resenias', function()
{
	$x = Resenia::find(1);
	return ('Consulta:'. $x);
});

Route::get('resenias_prof', function()
	{
		$x = Resenia::find(1)->profesores;
		return ('Consulta;'. $x);
	});

Route::get('profes_resenia', function()
	{
		$x = Profesor::find(1)->resenias;
		return ('Consulta;'. $x);
	});
/*


//Relacion tutoria profesor 1:M
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

//relacion libros profesor M:M
Route::get('libros', function()
{
	$libros = Profesor::find(1)->libros;
	return ("Holi--->".$libros);
});

Route::get('libros_profe', function()
{
	$libro_prof = Libro::find(1)->profesores;
	return ("Holi--->".$libro_prof);
}); */