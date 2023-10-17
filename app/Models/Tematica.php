<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name','carrera_id'];

    // Relacion con Carreras
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
    }

    // Relacion con Recursos
    public function recursos()
    {
        return $this->hasMany('App\Models\Recurso', 'tematica_id', 'id');
    }
}
