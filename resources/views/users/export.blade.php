<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1; // Inicializar el contador
        @endphp
        @foreach ($users as $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <span class="badge badge-dark">{{ $user['roles'] }}</span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
