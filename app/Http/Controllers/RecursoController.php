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

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $recursos = Recurso::where('titulo', 'LIKE', '%' . $busqueda . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $busqueda . '%')
                    ->orderBy('carrera_id', 'asc') // Cambia latest('id') a orderBy('id', 'desc')
                    ->paginate(15);

        $data = [
            'recursos' => $recursos,
            'busqueda' => $busqueda,
        ];

        return view('recurso.index', compact('recursos'), $data)
        ->with('i', (request()->input('page', 1) - 1) * $recursos->perPage());
    }

    public function detectarTipoArchivo($archivo)
    {
        $extension = strtolower($archivo->getClientOriginalExtension());

        $tiposArchivo = [
            'imagen' => ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'tiff', 'ico'],
            'video' => ['mp4', 'mov', 'avi', 'mkv', 'wmv', 'flv', 'webm', 'm4v'],
            'audio' => ['mp3', 'wav', 'flac', 'aac', 'ogg'],
            'documento' => ['pdf', 'docx', 'pptx', 'xlsx', 'csv', 'doc', 'ppt', 'xls', 'odt', 'ods', 'odp'],
            'comprimido' => ['zip', 'rar', '7z', 'tar', 'gz'],
            'adobe' => ['ai', 'psd', 'indd'],
            'texto' => ['txt', 'sql', 'html', 'xml', 'css', 'js', 'php', 'java', 'ts', 'c', 'cpp', 'cs', 'py', 'rb', 'pl'],
            'cad' => ['dwg', 'dxf', 'sldprt', 'sldasm', 'slddrw', 'slddrw', 'dwf', 'dwt', 'dws', 'rvt', 'dwf', 'rfa', '3ds'],
            'virtualizacion' => ['ova', 'ovf', 'vmdk', 'vmx', 'qcow2'],
            'redes' => ['pkt', 'pka', 'ccna', 'pks'],
        ];
        

        foreach ($tiposArchivo as $tipo => $extensiones) {
            if (in_array($extension, $extensiones)) {
                return $tipo;
            }
        }

        return 'desconocido'; // Tipo por defecto si no se detecta
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

        // Detectar y asignar automáticamente el tipo del archivo
        if ($request->hasFile('archivo')) {
            $tipoArchivo = $this->detectarTipoArchivo($request->file('archivo'));
            $recurso->tipo = $tipoArchivo;
        }

        $recurso->estado = 'pendiente'; // Asignar el estado como "pendiente"

        $recurso->save();

        return redirect()->route('recursos.index')
            ->with('success', 'Recurso creado con éxito.');
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
