<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado )

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{  $empleado->Foto }}</td>
            <td>{{  $empleado->Nombre  }}</td>
            <td>{{  $empleado->ApellidoPaterno }}</td>
            <td>{{  $empleado->ApellidoMaterno }}</td>
            <td>{{  $empleado->Correo }}</td>
            <td>Editar ||
                <form action="{{ url('/empleados/'.$empleado->id) }}" method="post">
                 {{ csrf_field() }}
                {{ method_field('Delete') }}
                <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
            </form>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>
