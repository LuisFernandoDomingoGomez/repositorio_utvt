<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            'generar-listados-usuarios',

            //Operacions sobre tabla carreras
            'ver-carrera',
            'crear-carrera',
            'editar-carrera',
            'borrar-carrera',

            //Operacions sobre tabla asignaturas
            'ver-asignatura',
            'crear-asignatura',
            'editar-asignatura',
            'borrar-asignatura',

            //Operacions sobre tabla tematicas
            'ver-tematica',
            'crear-tematica',
            'editar-tematica',
            'borrar-tematica',

            //Operacions sobre tabla recursos
            'ver-recurso',
            'crear-recurso',
            'editar-recurso',
            'borrar-recurso',

            //Operaciones para moderar publicaciones
            'mod-publicacion',
            'detalles-publicacion',
            'editar-publicacion',
            'borrar-publicacion',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}