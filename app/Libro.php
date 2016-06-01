<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model {

	public function profesores()
    {
        return $this->belongsToMany('App\Profesor', 'Libro_profesor', 'libro_id', 'profesor_id');
    }

}
