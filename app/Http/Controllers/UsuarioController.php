<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Profesor;

class UsuarioController extends Controller {

	public function nuevo_profesor(){
		return view('admin.user');
	}

	public function guardar_profesor(Request $request){

		$profesor = new Profesor;

		$profesor->nombre_prof = $request->input('nombre_prof');
		$profesor->lastname = $request->input('lastname');
		$profesor->email = $request->input('email');
		$profesor->pass = $request->input('pass');
		$profesor->gpo_lab = $request->input('gpo_lab');
		$profesor->rel_lab = $request->input('rel_lab');
		$profesor->categoria = $request->input('categoria');
		$profesor->tipo_prof = $request->input('tipo_prof');
		$profesor->grad_acad = $request->input('grad_acad');
		$profesor->est_acad = $request->input('est_acad');
		$profesor->cuerpo_acad = $request->input('cuerpo_acad');
		$profesor->lgac = $request->input('lgac');

		$profesor->save();

		return redirect ('nuevo_profesor');



	}

}
