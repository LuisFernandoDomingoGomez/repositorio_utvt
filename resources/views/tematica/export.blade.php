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
