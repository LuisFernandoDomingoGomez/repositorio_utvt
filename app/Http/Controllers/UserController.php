<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use PDF;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Traits\HasRoles;


class UserController extends Controller

{
    function __construct()
    {
         $this->middleware('permission:ver-usuario|crear-usuario|editar-usuario|borrar-usuario')->only('index');
         $this->middleware('permission:crear-usuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-usuario', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-usuario', ['only' => ['destroy']]);
         $this->middleware('permission:generar-pdf-lista-usuarios', ['only' => ['pdf']]);
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $users = User::where('name','LIKE','%'.$busqueda.'%')
                          ->orWhere('email','LIKE','%'.$busqueda.'%')
                          ->latest('id')
                          ->paginate(15);
        $data = [
            'users'=>$users,
            'busqueda'=>$busqueda,
        ];

        $user = User::count();
        $role = Role::count();

        return view('users.index', compact('users'), [
            'role' => $role,
            'user' => $user
        ], $data)
        ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    public function pdf()
    {
        $users = User::paginate(200);

        $pdf = PDF::loadView('users.pdf',['users'=>$users]);
        return $pdf->setPaper('a4', 'landscape')->stream('user.pdf');
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with('success', 'Usuario creado con éxito.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with('success', 'Usuario modificado con éxito');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado con éxito');
    }

}