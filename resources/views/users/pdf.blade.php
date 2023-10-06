<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <link rel="stylesheet" href="dist/css/app.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 180px;
        }
        .logos {
            display: flex;
            align-items: center;
        }
        .logos img {
            margin-right: 10px; /* Espacio entre los logos */
        }
        .logo-1 {
            width: 120px; /* Ancho del primer logotipo */
            height: auto; /* Altura ajustada automáticamente */
        }
        .logo-2 {
            width: 65px; /* Ancho del segundo logotipo */
            height: auto; /* Altura ajustada automáticamente */
        }
        .logo-3 {
            width: 180px; /* Ancho del tercer logotipo */
            height: auto; /* Altura ajustada automáticamente */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .badge {
            padding: 4px 8px;
            font-weight: bold;
        }
    </style>
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
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
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
