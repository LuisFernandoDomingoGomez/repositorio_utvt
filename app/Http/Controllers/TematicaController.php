<?php

namespace App\Http\Controllers;

use App\Models\Tematica;
use App\Models\Carrera;
use Illuminate\Http\Request;

class TematicaController extends Controller
{
    public function index()
    {
        $tematicas = Tematica::paginate(25);

        return view('tematica.index', compact('tematicas'))
            ->with('i', (request()->input('page', 1) - 1) * $tematicas->perPage());
    }

    public function create()
    {
        $tematica = new Tematica();
        $carrera = Carrera::pluck('name','id');

        return view('tematica.create', compact('tematica', 'carrera'));
    }

    public function store(Request $request)
    {
        request()->validate(Tematica::$rules);

        $tematica = Tematica::create($request->all());

        return redirect()->route('tematicas.index')
            ->with('success', 'Tematica created successfully.');
    }

    public function show($id)
    {
        $tematica = Tematica::find($id);

        return view('tematica.show', compact('tematica'));
    }

    public function edit($id)
    {
        $tematica = Tematica::find($id);
        $carrera = Carrera::pluck('name','id');

        return view('tematica.edit', compact('tematica', 'carrera'));
    }

    public function update(Request $request, Tematica $tematica)
    {
        request()->validate(Tematica::$rules);

        $tematica->update($request->all());

        return redirect()->route('tematicas.index')
            ->with('success', 'Tematica updated successfully');
    }

    public function destroy($id)
    {
        $tematica = Tematica::find($id)->delete();

        return redirect()->route('tematicas.index')
            ->with('success', 'Tematica deleted successfully');
    }
}
