<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name','carrera_id'];

    // Relacion con Carrera
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
    }

    // Relacion con Recursos
    public function recursos()
    {
        return $this->hasMany('App\Models\Recurso', 'asignatura_id', 'id');
    }
}
