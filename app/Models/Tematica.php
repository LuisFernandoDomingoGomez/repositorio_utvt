<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name'];

    // Relacion con Carreras
    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera', 'carrera_id', 'id');
    }

    // Relacion con Recursos
    public function recursos()
    {
        return $this->hasMany('App\Models\Recurso', 'tematica_id', 'id');
    }
}
