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

class DashboardController extends Controller
{
    public function index()
    {
        $tematicas = Tematica::withCount('recursos')
            ->orderBy('recursos_count', 'desc')
            ->limit(10)
            ->get();
        
        $tematicasMostradas = $tematicas->take(4);
        $tematicasRestantes = $tematicas->slice(4);
        
        $recursos = Recurso::where('estado', 'aprobado')->get(); //Solo traer los recursos con el estado "aprobado"

        $asignaturas = Asignatura::inRandomOrder()->limit(9)->get();

        return view('dashboard', compact('tematicas', 'recursos', 'asignaturas', 'tematicasMostradas', 'tematicasRestantes'));
    }
}