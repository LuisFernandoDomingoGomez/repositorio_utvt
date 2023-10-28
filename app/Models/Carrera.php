<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    static $rules = [
		'name' => 'required',
        'imagen' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name','imagen'];

    // Obtener el numero total de asignaturas relacionadas con una carrera.
    public function getTotalAsignaturas()
    {
        return $this->asignaturas->count();
    }

    // Relacion con Asignaturas
    public function asignaturas()
    {
        return $this->hasMany('App\Models\Asignatura', 'carrera_id', 'id');
    }

    // Relacion con Recursos
    public function recursos()
    {
        return $this->hasMany('App\Models\Recurso', 'carrera_id', 'id');
    }

    // Relacion con Tematicas
    public function tematicas()
    {
        return $this->hasMany('App\Models\Tematica', 'carrera_id', 'id');
    }
}
