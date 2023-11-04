<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tematicas</title>
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="utvt/css/pdf.css">
</head>
<body>
    <div class="header">
        <!-- Logos de las instituciones -->
        <div class="logos">
            <img src="dist/images/logo_edomex.png" alt="Logo 1" class="logo-1" style="margin-right: 309px;">
            <img src="dist/images/utvt_logo.png" alt="Logo 2" class="logo-2">
            <img src="dist/images/logo_edomex2.png" alt="Logo 3" class="logo-3">
        </div>
    </div>
    <h2>Listado de Tematicas</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Carrera Vinculada</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($tematicas as $tematica)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $tematica->name }}</td>
                    <td>{{ $tematica->carrera->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>