<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use App\Models\Recurso;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Tematica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class RecursoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-recurso|crear-recurso|editar-recurso|borrar-recurso')->only('index');
        $this->middleware('permission:crear-recurso', ['only' => ['create','store']]);
        $this->middleware('permission:editar-recurso', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-recurso', ['only' => ['destroy']]);
    }

    public function index()
    {
        $recursos = Recurso::paginate();

        return view('recurso.index', compact('recursos'))
            ->with('i', (request()->input('page', 1) - 1) * $recursos->perPage());
    }

    public function create()
    {
        $user = auth()->user();

        $recurso = new Recurso([
            'user_id' => $user->id,
        ]);

        $carrera = Carrera::pluck('name','id');
        $asignatura = Asignatura::pluck('name','id');
        $tematica = Tematica::pluck('name','id');

        return view('recurso.create', compact('recurso','carrera','asignatura','tematica'));
    }

    public function store(Request $request)
    {
        request()->validate(Recurso::$rules);

        // Obtener al usuario autenticado
        $user = auth()->user();

        // Crear el recurso y asignar el user_id antes de guardarlo
        $recurso = new Recurso($request->all());
        $recurso->user_id = $user->id;

        // Asignar el estado como "pendiente"
        $recurso->estado = 'pendiente';


        $recurso->save();

        return redirect()->route('recursos.index')
            ->with('success', 'Recurso creado con exito.');
    }

    // Métodos para aprobar y rechazar recursos
    
    /*public function approve(Recurso $recurso)
    {
        $recurso->update(['estado' => 'aprobado']);
        // Agregar notificaciones o registros
        return redirect()->route('recursos.index')
            ->with('success', 'Recurso aprobado con éxito.');
    }

    public function reject(Recurso $recurso)
    {
        $recurso->update(['estado' => 'rechazado']);
        // Agregar notificaciones o registros
        return redirect()->route('recursos.index')
            ->with('success', 'Recurso rechazado con éxito.');
    }*/

    public function show($id)
    {
        $recurso = Recurso::find($id);

        return view('recurso.show', compact('recurso'));
    }

    public function edit($id)
    {
        $recurso = Recurso::find($id);
        $carrera = Carrera::pluck('name','id');
        $asignatura = Asignatura::pluck('name','id');
        $tematica = Tematica::pluck('name','id');

        return view('recurso.edit', compact('recurso','carrera','asignatura','tematica'));
    }

    public function update(Request $request, Recurso $recurso)
    {
        request()->validate(Recurso::$rules);

        $recurso->update($request->all());

        return redirect()->route('recursos.index')
            ->with('success', 'Recurso editado con exito');
    }

    public function destroy($id)
    {
        $recurso = Recurso::find($id)->delete();

        return redirect()->route('recursos.index')
            ->with('success', 'Recurso eliminado con exito');
    }
}
