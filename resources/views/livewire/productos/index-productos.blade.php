<div>

    <a href="{{route('productos.crear')}}" type="button" class="float-right mb-3 btn btn-success">Nuevo</a>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <th scope="row">{{$producto->id}}</th>
                    <td></td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->cantidad}}</td>
                </tr>
            @endforeach


        </tbody>
      </table>

      {{$productos->links()}}

</div>
