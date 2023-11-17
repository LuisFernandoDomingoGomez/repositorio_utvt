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
        $user_id = auth()->id();

        $recursos = Recurso::where('user_id', $user_id)
            ->where(function ($query) use ($busqueda) {
                $query->where('titulo', 'LIKE', '%' . $busqueda . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $busqueda . '%');
            })
            ->orderBy('carrera_id', 'asc')
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
            'comprimido' => ['zip', 'rar'],
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
        // Validación de datos
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'archivo' => [
                'required',
                'file',
                'max:50000',
                function ($attribute, $value, $fail) {
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'tiff', 'ico', 
                                        'mp4', 'mov', 'avi', 'mkv', 'wmv', 'flv', 'webm', 'm4v', 
                                        'mp3', 'wav', 'flac', 'aac', 'ogg', 'pdf', 'docx', 'pptx', 
                                        'xlsx', 'csv', 'doc', 'ppt', 'xls', 'odt', 'ods', 'odp', 
                                        'zip', 'rar', 'ai', 'psd', 'indd', 'txt', 'sql', 'html', 'xml', 
                                        'css', 'js', 'php', 'java', 'ts', 'c', 'cpp', 'cs', 'py', 'rb', 
                                        'pl', 'dwg', 'dxf', 'sldprt', 'sldasm', 'slddrw', 'slddrw', 'dwf', 
                                        'dwt', 'dws', 'rvt', 'dwf', 'rfa', '3ds', 'ova', 'ovf', 'vmdk', 'vmx', 
                                        'qcow2', 'pkt', 'pka', 'ccna', 'pks'];
        
                    $extension = strtolower($value->getClientOriginalExtension());
        
                    if (!in_array($extension, $allowedExtensions)) {
                        $fail('El archivo no es válido. Asegúrate de que el archivo sea de uno de los tipos permitidos.');
                    }
                },
            ],
        ]);

        $archivo = $request->file('archivo');
        $archivoNombre = $archivo->getClientOriginalName();
        $archivo->storeAs('archivos_recursos', $archivoNombre, 'public'); // Guardar en la carpeta "archivos_recursos" en el disco público

        // Obtener al usuario autenticado
        $user = auth()->user();

        $recurso = new Recurso($request->all());
        $recurso->user_id = $user->id;

        // Detectar y asignar automáticamente el tipo del archivo
        if ($request->hasFile('archivo')) {
            $tipoArchivo = $this->detectarTipoArchivo($request->file('archivo'));
            $recurso->tipo = $tipoArchivo;
        }

        // Guardar el archivo en la carpeta "archivos_recursos"
        $archivo->move(public_path('archivos_recursos'), $archivoNombre);
        $recurso->archivo = 'archivos_recursos/' . $archivoNombre;

        $recurso->estado = 'pendiente'; // Asignar el estado como "pendiente"

        $recurso->save();

        return redirect()->route('recursos.index')
            ->with('success', 'Recuerda que aún debes esperar a que tu publicación sea aceptada por el responsable de validación.');
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
            ->with('success', 'Recurso actualizado');
    }

    public function destroy($id)
    {
        $recurso = Recurso::find($id)->delete();

        return redirect()->route('recursos.index');
    }
}
