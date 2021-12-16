<div wire:init = "cargando">

    <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

    <a href="{{route('animales.crear')}}" type="button" class="float-right mb-3 btn btn-success">
    <i class="fa fa-plus-circle"></i> Crear animal</a>

    <div class="table-responsive">

    @if (count($animales) > 0)
    <table class="table table-sm">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th>Foto</th>
            <th scope="col">Animal</th>
            <th scope="col">Esppecie</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
    </div>


        <tbody>
            @foreach ($animales as $animal)
                <tr>
                    <th scope="row">{{$animal->id}}</th>
                    <th>
                        <img style="width: 70px; height: 70px;"
                        src="{{Storage::disk('public')->url($animal->Foto != null ? $animal->Foto : 'images/animals/defaultAnimal.png')}}" alt="">
                    </th>
                    <td>{{$animal->animal}}</td>
                    <td>{{$animal->especie}}</td>
                    <td>{{$animal->Precio}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-9 text-right">
                                <div class="btn-group contenedor-botones" role="group">

                                    <a title = "Editar datos del animal" href = "{{ route('animales.edit', $animal) }}"
                                    type = "button" class = "btn-sm btn btn-primary" ><i class = "fa fa-edit"></i></a>

                                    <a title = "Eliminar animal" href = "{{ route('animales.delete', $animal) }}"
                                    type = "button"  class = "btn-sm btn btn-danger" ><i class = "fa fa-trash"></i></a>

                                    <a title = "Mostrar animal" href = "{{ route('animales.mostrar', $animal) }}"
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

            {{$cargado == True ? $animales->links(): null}}

</div>
