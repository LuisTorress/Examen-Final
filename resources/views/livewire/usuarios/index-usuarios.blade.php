<div wire:init = "cargando">

    <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

    <a href="{{route('usuarios.crear')}}" type="button" class="float-right mb-3 btn btn-success">
    <i class="fa fa-plus-circle"></i> Crear Usuario</a>

    <div class="table-responsive">

    @if (count($Usuarios) > 0)
    <table class="table table-sm">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">Email</th>
        </thead>
    </div>


        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <th>
                        <img style="width: 70px; height: 70px;"
                        src="{{Storage::disk('public')->url($usuario->Foto != null ? $usuario->Foto : 'images/usuarios/Missing_Image.png')}}" alt="">
                    </th>
                    <td>{{$usuario->Nombre}}</td>
                    <td>{{$usuario->Email}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-9 text-right">
                                <div class="btn-group contenedor-botones" role="group">

                                    <a title = "Editar datos del usuario" href = "{{ route('usuarios.edit', $usuario) }}"
                                    type = "button" class = "btn-sm btn btn-primary" ><i class = "fa fa-edit"></i></a>

                                    <a title = "Eliminar usuario" href = "{{ route('usuarios.delete', $usuario) }}"
                                    type = "button"  class = "btn-sm btn btn-danger" ><i class = "fa fa-trash"></i></a>

                                    <a title = "Mostrar usuario" href = "{{ route('usuarios.mostrar', $usuario) }}"
                                    class = "btn-sm btn btn-info" ><i class = "fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    @else
        <img class="mx-auto d-block" style="width:500px;height:500px;" src="{{Storage::disk('public')->url('images/otros/spinning-loading.gif')}}" alt="">
    @endif

            {{$cargado == True ? $usuarios->links(): null}}

</div>
