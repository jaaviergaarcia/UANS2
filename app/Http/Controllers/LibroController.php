<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Libro;

class LibroController extends Controller {

	public function nuevo_libro(){
		return view('admin.libro');

	}

	public function guardar_libro(Request $request){

		$libro= new Libro;

		$libro->fecha_pub=$request->input('fecha_pub');
		$libro->tipo_libro=$request->input('tipo_libro');
		$libro->autor=$request->input('autor');
		$libro->titulo_libro=$request->input('titulo_libro');
		$libro->editorial=$request->input('editorial');
		$libro->total_autores=$request->input('total_autores');
		$libro->pos_autor=$request->input('pos_autor');
		$libro->lista=$request->input('lista');
		$libro->isbn=$request->input('isbn');

		$libro->save();

		return redirect('nuevo_libro');

	}

}
