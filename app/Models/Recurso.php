<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    static $rules = [
    'titulo' => 'required',
    'descripcion' => 'required',
    'archivo' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['titulo', 'descripcion', 'carrera_id', 'asignatura_id', 'tematica_id',
                            'autor', 'user_id', 'anonimo', 'archivo', 'tipo', 'estado'];

    // Relacion con Carreras
    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera', 'carrera_id', 'id');
    }

    // Relacion con Asignaturas
    public function asignatura()
    {
        return $this->belongsTo('App\Models\Asignatura', 'asignatura_id', 'id');
    }

    // Relacion con Tematicas
    public function tematica()
    {
        return $this->belongsTo('App\Models\Tematica', 'tematica_id', 'id');
    }

    // Relacion con Users
    public function user()
    {
        return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
