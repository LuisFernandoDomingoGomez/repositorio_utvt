<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class CarreraController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-carrera|crear-carrera|editar-carrera|borrar-carrera')->only('index');
        $this->middleware('permission:crear-carrera', ['only' => ['create','store']]);
        $this->middleware('permission:editar-carrera', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-carrera', ['only' => ['destroy']]);
    }

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
        $request->validate([
            'name' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $carrera = new Carrera();
        $carrera->name = $request->input('name');

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();

            $imagen->storeAs('img_carreras', $imagenNombre, 'public');

            $carrera->imagen = 'img_carreras/' . $imagenNombre;
        }

        $carrera->save();

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera creada.');
    }

    public function edit($id)
    {
        $carrera = Carrera::find($id);
        return view('carrera.edit', compact('carrera'));
    }

    // Funcion pendiente por temas de correcta actualizacion de datos almacenados en el disco publico
    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'name' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $carrera->name = $request->input('name');
    
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();
    
            $imagen->storeAs('img_carreras', $imagenNombre, 'public');
            $carrera->imagen = 'img_carreras/' . $imagenNombre;

            if ($carrera->imagen) {
                $imagenAnterior = basename($carrera->imagen);
                Storage::disk('public')->delete('img_carreras/' . $imagenAnterior);
            }
        }

        $carrera->save();

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera actualizada');
    }

    public function destroy($id)
    {
        $carrera = Carrera::find($id)->delete();

        return redirect()->route('carreras.index');
    }
}
