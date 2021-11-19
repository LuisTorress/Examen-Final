<div>
    <div class="table-responsive">

        <a href="{{route('empleados.crear')}}" type="button" class="float-right mb-3 btn btn-success"><i class="fa fa-plus-circle"></i> Crear Empleado</a>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PrimerNombre</th>
            <th scope="col">SegundoNombre</th>
            <th scope="col">ApellidoPaterno</th>
            <th scope="col">ApellidoMaterno</th>
            <th scope="col">Sexo</th>
            <th scope="col">FechaDeNacimiento</th>
            <th scope="col">PuestoDeTrabajo</th>
            <th scope="col">Curp</th>
            <th scope="col">Rfc</th>
            <th scope="col">Estado</th>
            <th scope="col">CodigoPostal</th>
            <th scope="col">Salario</th>
            <th scope="col">CorreoElectronico</th>
            <th scope="col">HorarioDeTrabajo</th>
            <th scope="col">ÁreaDeTrabajo</th>
            <th scope="col">Facebook</th>
            <th scope="col">Telefono</th>
            <th scope='col'>Acciones</th>
          </tr>
        </thead>
    </div>


        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <th scope="row">{{$empleado->id}}</th>
                    <td>{{$empleado->PrimerNombre}}</td>
                    <td>{{$empleado->SegundoNombre}}</td>
                    <td>{{$empleado->ApellidoPaterno}}</td>
                    <td>{{$empleado->ApellidoMaterno}}</td>
                    <td>{{$empleado->Sexo}}</td>
                    <td>{{$empleado->FehaDeNacimiento}}</td>
                    <td>{{$empleado->PuestoDeTrabajo}}</td>
                    <td>{{$empleado->Curp}}</td>
                    <td>{{$empleado->Rfc}}</td>
                    <td>{{$empleado->Estado}}</td>
                    <td>{{$empleado->CodigoPostal}}</td>
                    <td>{{$empleado->Salario}}</td>
                    <td>{{$empleado->CorreoElectronico}}</td>
                    <td>{{$empleado->HorarioDeTrabajo}}</td>
                    <td>{{$empleado->ÁreaDeTrabajo}}</td>
                    <td>{{$empleado->Facebook}}</td>
                    <td>{{$empleado->Telefono}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-9 text-right">
                                <div class="btn-group contenedor-botones" role="group">
                                    <a title = "Editar datos del empleado" href = "{{ route('empleados.edit', $empleado) }}" type = "button" class = "btn-sm btn btn-primary" ><i class = "fa fa-edit"></i></a>
                                    <a title = "Eliminar empleado" href = "{{ route('empleados.delete', $empleado) }}" type = "button"  class = "btn-sm btn btn-danger" ><i class = "fa fa-trash"></i></a>
                                    <a title = "Mostrar empleado" href = "{{ route('empleados.mostrar', $empleado) }}" class = "btn-sm btn btn-info" ><i class = "fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach


        </tbody>
      </table>

      {{$empleados->links()}}

</div>
