<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::paginate();
        return view('carrera.index', compact('carreras'))
            ->with('i', (request()->input('page', 1) - 1) * $carreras->perPage());
    }

    public function create()
    {
        $carrera = new Carrera();
        return view('carrera.create', compact('carrera'));
    }

    public function store(Request $request)
    {
        request()->validate(Carrera::$rules);

        $carrera = Carrera::create($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera creada con exito.');
    }

    public function show($id)
    {
        $carrera = Carrera::find($id);
        return view('carrera.show', compact('carrera'));
    }

    public function edit($id)
    {
        $carrera = Carrera::find($id);
        return view('carrera.edit', compact('carrera'));
    }

    public function update(Request $request, Carrera $carrera)
    {
        request()->validate(Carrera::$rules);

        $carrera->update($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera editada con exito');
    }

    public function destroy($id)
    {
        $carrera = Carrera::find($id)->delete();

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera eliminada con exito');
    }
}
