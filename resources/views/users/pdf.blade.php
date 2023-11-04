<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="utvt/css/pdf.css">
</head>
<body>
    <div class="header">
        <!-- Logos de las instituciones -->
        <div class="logos">
            <img src="dist/images/logo_edomex.png" alt="Logo 1" class="logo-1" style="margin-right: 630px;">
            <img src="dist/images/utvt_logo.png" alt="Logo 2" class="logo-2">
            <img src="dist/images/logo_edomex2.png" alt="Logo 3" class="logo-3">
        </div>
    </div>
    <h2>Listado de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; // Inicializar el contador
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $rolNombre)
                                <span class="badge badge-dark">{{ $rolNombre }}</span>
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>