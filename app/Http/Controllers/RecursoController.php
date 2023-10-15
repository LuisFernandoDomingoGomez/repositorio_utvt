<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use App\Models\Carrera;
use App\Models\Asignatura;
use App\Models\Tematica;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index()
    {
        $recursos = Recurso::paginate();

        return view('recurso.index', compact('recursos'))
            ->with('i', (request()->input('page', 1) - 1) * $recursos->perPage());
    }

    public function create()
    {
        $recurso = new Recurso();
        $carrera = Carrera::pluck('name','id');
        $asignatura = Asignatura::pluck('name','id');
        $tematica = Tematica::pluck('name','id');

        return view('recurso.create', compact('recurso','carrera','asignatura','tematica'));
    }

    public function store(Request $request)
    {
        request()->validate(Recurso::$rules);

        $recurso = Recurso::create($request->all());

        return redirect()->route('recursos.index')
            ->with('success', 'Recurso creado con exito.');
    }

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
