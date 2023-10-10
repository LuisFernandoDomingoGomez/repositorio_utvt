<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; // Importa ShouldAutoSize

class UsersExport implements FromView, ShouldAutoSize // Implementa ShouldAutoSize
{
    /**
     * @return View
     */
    public function view(): View
    {
        // Obtén la lista de usuarios de tu aplicación
        $allUsers = User::all();

        // Obtén información de roles para cada usuario
        $usersWithRoles = $allUsers->map(function ($user) {
            return [
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $user->getRoleNames()->implode(', '), // Obtén los roles y únelos como una cadena
                'created_at' => $user->created_at,
            ];
        });

        return view('users.export', [
            'users' => $usersWithRoles, // Pasamos la información de roles a la vista
        ]);
    }
}
