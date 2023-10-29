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

use PDF;
use App\Exports\AsignaturasExport;
use Maatwebsite\Excel\Facades\Excel;

class AsignaturaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-asignatura|crear-asignatura|editar-asignatura|borrar-asignatura')->only('index');
        $this->middleware('permission:crear-asignatura', ['only' => ['create','store']]);
        $this->middleware('permission:editar-asignatura', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-asignatura', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $asignaturas = Asignatura::where('name', 'LIKE', '%' . $busqueda . '%')
                    ->orderBy('carrera_id', 'asc') // Cambia latest('id') a orderBy('id', 'desc')
                    ->paginate(15);

        $data = [
            'asignaturas' => $asignaturas,
            'busqueda' => $busqueda,
        ];

        return view('asignatura.index', compact('asignaturas'), $data)
        ->with('i', (request()->input('page', 1) - 1) * $asignaturas->perPage());
    }

    public function pdf()
    {
        $asignaturas = Asignatura::paginate(200);

        $pdf = PDF::loadView('asignatura.pdf',['asignaturas'=>$asignaturas]);
        return $pdf->stream();
    }

    public function downloadPdf()
    {
        $asignaturas = Asignatura::paginate(200);
        $pdf = PDF::loadView('asignatura.pdf', ['asignaturas' => $asignaturas]);
        
        // Descargar automáticamente el PDF
        return $pdf->setPaper('a4')->download('asignatura.pdf');
    }

    public function export()
    {
        return Excel::download(new AsignaturasExport, 'asignatura.xlsx');
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

        $asignatura = new Asignatura();
        $asignatura->name = $request->input('name');
        $asignatura->carrera_id = $request->input('carrera_id');

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();
            $imagen->storeAs('img_asignaturas', $imagenNombre, 'public');

            $imagen->move(public_path('img_asignaturas'), $imagenNombre);
            $asignatura->imagen = 'img_asignaturas/' . $imagenNombre;
        }

        $asignatura->save();

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura creada.');
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

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();
            $imagen->storeAs('img_asignaturas', $imagenNombre, 'public');

            $imagen->move(public_path('img_asignaturas'), $imagenNombre);
            $asignatura->imagen = 'img_asignaturas/' . $imagenNombre;
        }

        $asignatura->save();

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura actualizada');
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id)->delete();

        return redirect()->route('asignaturas.index');
    }
}
