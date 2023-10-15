<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Asignatura;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class AsignaturaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-asignatura|crear-asignatura|editar-asignatura|borrar-asignatura')->only('index');
         $this->middleware('permission:crear-asignatura', ['only' => ['create','store']]);
         $this->middleware('permission:editar-asignatura', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-asignatura', ['only' => ['destroy']]);
    }

    public function index()
    {
        $asignaturas = Asignatura::paginate(10);

        return view('asignatura.index', compact('asignaturas'))
            ->with('i', (request()->input('page', 1) - 1) * $asignaturas->perPage());
    }

    public function create()
    {
        $asignatura = new Asignatura();
        $carrera = Carrera::pluck('name','id');

        return view('asignatura.create', compact('asignatura','carrera'));
    }

    public function store(Request $request)
    {
        request()->validate(Asignatura::$rules);

        $asignatura = Asignatura::create($request->all());

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura creada con exito.');
    }

    public function show($id)
    {
        $asignatura = Asignatura::find($id);

        return view('asignatura.show', compact('asignatura'));
    }

    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        $carrera = Carrera::pluck('name','id');

        return view('asignatura.edit', compact('asignatura', 'carrera'));
    }

    public function update(Request $request, Asignatura $asignatura)
    {
        request()->validate(Asignatura::$rules);

        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura actualizada con exito');
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id)->delete();

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura eliminada con exito');
    }
}
