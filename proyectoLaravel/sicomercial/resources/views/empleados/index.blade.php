Inicio(Despliegue de datos)

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{asset('storage/uploads').'/'.$empleado->Foto}}" alt="" width="200"
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>

            <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">
                editar
            </a>

                |

                <form method="get" action="{{ url('/empleados/destroy/'.$empleado->id) }}">
                    {{csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('quieres Borrar?')" >Borrar</button>

                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>
