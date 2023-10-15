<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name', 'carrera_id'];

    // Relacion con Carrera
    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera', 'carrera_id', 'id');
    }

    // Relacion con Recursos
    public function recursos()
    {
        return $this->hasMany('App\Models\Recurso', 'asignatura_id', 'id');
    }
}
