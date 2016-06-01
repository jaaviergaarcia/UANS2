<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model {

	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Informe_profesor', 'informe_id', 'profesor_id');
	}

}
