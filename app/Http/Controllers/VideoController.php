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

class VideoController extends Controller
{
    public function index()
    {
        $tematicas = Tematica::withCount('recursos')
            ->orderBy('recursos_count', 'desc')
            ->get();
        
        $recursos = Recurso::where('estado', 'aprobado')
            ->where('tipo', 'video')
            ->orderBy('created_at', 'desc')
            ->get();

        $asignaturas = Asignatura::inRandomOrder()->limit(9)->get();

        return view('Video', compact('tematicas', 'recursos', 'asignaturas'));
    }
}