<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class EstadoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:mod-publicacion')->only('index');
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

        return view('estado', compact('recursos'), $data)
            ->with('i', (request()->input('page', 1) - 1) * $recursos->perPage());
    }
}
