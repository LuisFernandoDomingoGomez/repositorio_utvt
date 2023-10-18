<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    static $rules = [
		'titulo' => 'required',
		'anonimo' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['titulo','descripcion','carrera_id','asignatura_id','tematica_id','autor','user_id','anonimo','archivo','tipo','estado'];

    // Relacion con Asignaturas
    public function asignatura()
    {
        return $this->hasOne('App\Models\Asignatura', 'id', 'asignatura_id');
    }

    // Relacion con Carreras
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
    }

    // Relacion con Tematicas
    public function tematica()
    {
        return $this->hasOne('App\Models\Tematica', 'id', 'tematica_id');
    }

    // Relacion con Users
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

}
