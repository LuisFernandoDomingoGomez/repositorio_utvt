<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
 
// Agregamos el modelo de permisos de spatie 
use Spatie\Permission\Models\Permission; 
 
class SeederTablePermisos extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
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
            'generar-pdf-lista-usuarios',
        ]; 
 
        foreach($permisos as $permiso) { 
            Permission::create(['name'=>$permiso]); 
        } 
    } 
}