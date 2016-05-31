<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

	
	public function desarrollos()
	{
		return $this->hasMany('App\Desarrollo','profesor_id');
	}

	public function patentes()
	{
		return $this->hasMany('App\Patente','profesor_id');
	}

	public function trabajos()
	{
		return $this->hasMany('App\Trabajo','profesor_id');
	}

	public function tutorias()
	{
		return $this->hasMany('App\Tutoria','profesor_id');
	}

}
