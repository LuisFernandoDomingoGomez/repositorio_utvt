<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Carrera Afiliada</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1; // Inicializar el contador
        @endphp
        @foreach ($asignaturas as $asignatura)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $asignatura->name }}</td>
                <td>{{ $asignatura->carrera->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
