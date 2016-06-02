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

	//Muchos a Muchos

	public function libros()
    {
        return $this->belongsToMany('App\Libro', 'Libro_profesors', 'profesor_id', 'libro_id');
    }

    public function articulos(){
    	return $this->belongsToMany('App\Articulo', 'Libro_profesors','profesor_id', 'articulo_id');
    }

    public function informes(){
    	return $this->belongsToMany('App\Informe', 'Informe_profesors', 'profesor_id', 'informe_id');
    }

}
