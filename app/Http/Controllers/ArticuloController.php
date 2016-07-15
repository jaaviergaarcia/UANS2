<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Articulo;

class ArticuloController extends Controller {



    public function nuevo_articulo(){

	    return view ('admin.articulo');
    }
    
	public function guardar_articulo(Request $request){

		$articulo = new Articulo;

		$articulo->fecha_pub = $request->input('fecha_pub');
		$articulo->tipo_art = $request->input('tipo_art');
		$articulo->autor = $request->input('autor');
		$articulo->titulo_art = $request->input('titulo_art');
		$articulo->revista = $request->input('revista');
		$articulo->principal = $request->input('principal');
		$articulo->autores = $request->input('autores');
		$articulo->pos_autor = $request->input('pos_autor');
		$articulo->lista_autor = $request->input('lista_autor');

		$articulo->save();

		return redirect ('nuevo_articulo');

	}

}
