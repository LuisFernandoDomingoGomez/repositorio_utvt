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

class GaleriaController extends Controller
{
    public function index()
    {
        $tematicas = Tematica::withCount('recursos')
            ->orderBy('recursos_count', 'desc')
            ->limit(10)
            ->get();
        
        $tematicasMostradas = $tematicas->take(4);
        $tematicasRestantes = $tematicas->slice(4);
        
        $recursos = Recurso::where('estado', 'aprobado')
            ->where('tipo', 'imagen')
            ->orderBy('created_at', 'desc')
            ->get();

        $asignaturas = Asignatura::inRandomOrder()->limit(9)->get();

        return view('galeria', compact('tematicas', 'recursos', 'asignaturas', 'tematicasMostradas', 'tematicasRestantes'));
    }
}