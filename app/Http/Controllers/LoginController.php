<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Profesor;
use Session;

class LoginController extends Controller {

	public function accesar( Request $request)
	{

		//esto verifica que si ya iniciado  sesion 
	
		if(Auth::user()){
			return  redirect ('admin');
		}

		$usuario= strtoupper($request ->input('email'));
		$pass=strtoupper($request -> input('pass'));

		$profesors = Profesor::all();

		foreach ($profesors as $profesor ) {
			# code...
			if(($profesor->email==$usuario) && ($profesor->pass==$pass))
			{
				Session::put('id',$profesor->(id));
				Session::put('nombre',$profesor->(nombre_prof));
				Session::put('Email', $profesor->(email));
			}
		}


	}

}
