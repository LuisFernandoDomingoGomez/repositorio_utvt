<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Spatie\Permission\Models\Role; 
use Spatie\Permission\Models\Permission; 
use DB; 

class RolController extends Controller 
{ 
    function __construct() 
    { 
        $this->middleware('permission:ver-rol | crear-rol | editar-rol | borrar-rol', ['only'=>['index']]); 
        $this->middleware('permission:crear-rol', ['only'=>['create','store']]); 
        $this->middleware('permission:editar-rol', ['only'=>['edit','update']]); 
        $this->middleware('permission:borrar-rol', ['only'=>['destroy']]); 
    } 

    public function index() 
    { 
        $roles = Role::paginate(5); 
        return view('roles.index',compact('roles')) 
            ->with('i', (request()->input('page', 1) - 1) * $roles->perPage()); 
    } 

    public function create() 
    { 
        $permission = Permission::get(); 
        return view ('roles.create', compact('permission')); 
    } 

    public function store(Request $request) 
    { 
        $this->validate($request, ['name' => 'required', 'permission'=>'required']); 
        $role = Role::create(['name'=> $request->input('name')]); 
        $role->syncPermissions($request->input('permission')); 

        return redirect()->route('roles.index') 
            ->with('success', 'Rol creado con éxito.'); 
    } 

    public function edit($id) 
    { 
        $role = Role::find($id); 
        $permission = Permission::get(); 
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id) 
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id') 
            ->all(); 
        return view('roles.edit', compact('role', 'permission', 'rolePermissions')); 
    } 

    public function update(Request $request, $id) 
    { 
        $this->validate($request, ['name' => 'required', 'permission'=>'required']); 
 
        $role = Role::find($id); 
        $role->name = $request->input('name'); 
        $role->save(); 
 
        $role->syncPermissions($request->input('permission')); 
 
        return redirect()->route('roles.index') 
            ->with('success', 'Rol editado con éxito'); 
    } 

    public function destroy($id) 
    { 
        DB::table("roles")->where('id',$id)->delete(); 
        return redirect()->route('roles.index') 
            ->with('success', 'Rol eliminado con éxito'); 
    } 
}