<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Tematica;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

use PDF;
use App\Exports\TematicasExport;
use Maatwebsite\Excel\Facades\Excel;

class TematicaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-tematica|crear-tematica|editar-tematica|borrar-tematica')->only('index');
        $this->middleware('permission:crear-tematica', ['only' => ['create','store']]);
        $this->middleware('permission:editar-tematica', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-tematica', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $tematicas = Tematica::where('name', 'LIKE', '%' . $busqueda . '%')
                    ->orderBy('carrera_id', 'asc') // Cambia latest('id') a orderBy('id', 'desc')
                    ->paginate(15);

        $data = [
            'tematicas' => $tematicas,
            'busqueda' => $busqueda,
        ];

        return view('tematica.index', compact('tematicas'), $data)
        ->with('i', (request()->input('page', 1) - 1) * $tematicas->perPage());
    }

    public function pdf()
    {
        $tematicas = Tematica::paginate(200);

        $pdf = PDF::loadView('tematica.pdf',['tematicas'=>$tematicas]);
        return $pdf->stream();
    }

    public function downloadPdf()
    {
        $tematicas = Tematica::paginate(200);
        $pdf = PDF::loadView('tematica.pdf', ['tematicas' => $tematicas]);
        
        // Descargar automáticamente el PDF
        return $pdf->setPaper('a4')->download('tematica.pdf');
    }

    public function export()
    {
        return Excel::download(new TematicasExport, 'tematica.xlsx');
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

        $tematica = new Tematica();
        $tematica->name = $request->input('name');
        $tematica->carrera_id = $request->input('carrera_id');

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();
            $imagen->storeAs('img_tematicas', $imagenNombre, 'public');

            $imagen->move(public_path('img_tematicas'), $imagenNombre);
            $tematica->imagen = 'img_tematicas/' . $imagenNombre;
        }

        $tematica->save();

        return redirect()->route('tematicas.index')
            ->with('success', 'Tematica creada.');
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

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = $imagen->getClientOriginalName();
            $imagen->storeAs('img_tematicas', $imagenNombre, 'public');

            $imagen->move(public_path('img_tematicas'), $imagenNombre);
            $tematica->imagen = 'img_tematicas/' . $imagenNombre;
        }

        $tematica->save();

        return redirect()->route('tematicas.index')
            ->with('success', 'Tematica actualizada.');
    }

    public function destroy($id)
    {
        $tematica = Tematica::find($id)->delete();

        return redirect()->route('tematicas.index');
    }
}
