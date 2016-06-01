<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Distincion extends Model {

	public function profesores()
	{
		return $this->belongsToMany('App\Profesor', 'Disticion_profesor', 'distincion_id', 'profesor_id');
	}

}
