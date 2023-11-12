<?php

namespace App\Http\Controllers;

use App\Models\Tematica;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Requests\UserRequest;

class ContenidoController extends Controller
{
    public function obtenerTematicasRandomPorSeccion($seccion)
    {
        $tematicas = Tematica::withCount('recursos')->get();
        $grupos = $tematicas->chunk(ceil($tematicas->count() / 3));

        if ($seccion >= 1 && $seccion <= count($grupos)) {
            $tematicasRandom = $grupos[$seccion - 1]->random(3);
            return $tematicasRandom;
        }

        return collect();
    }

    public function index()
    {
        $tematicas = Tematica::withCount('recursos')
            ->orderBy('recursos_count', 'desc')
            ->limit(10)
            ->get();
        
        $tematicasMostradas = $tematicas->take(4);
        $tematicasRestantes = $tematicas->slice(4);

        $tematicas1Random = $this->obtenerTematicasRandomPorSeccion(1);
        $tematicas2Random = $this->obtenerTematicasRandomPorSeccion(2);
        $tematicas3Random = $this->obtenerTematicasRandomPorSeccion(3);
        
        $recursos = Recurso::where('estado', 'aprobado')
            ->where('tipo', 'documento')
            ->orderBy('created_at', 'desc')
            ->get();

        $asignaturas = Asignatura::inRandomOrder()->limit(9)->get();

        return view('contenido', compact('tematicas', 'recursos', 'asignaturas', 'tematicasMostradas', 'tematicasRestantes', 'tematicas1Random', 'tematicas2Random', 'tematicas3Random'));
    }
}