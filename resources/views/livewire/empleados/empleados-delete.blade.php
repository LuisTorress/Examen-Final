<div class="card mx-auto" style="width: 18rem;">
    <h6 class="card-text"> Desea Eliminar a: </h6>
    <div class="card-body">
      <h5 class="card-title">{{$empleados->PrimerNombre}}</h5>
      <button wire:click = "delete" class="btn btn-danger btn-sm">Confirmar</button>
      <a href="{{route('empleados')}}" class="btn btn-primary btn-sm">Cancelar</a>
    </div>
  </div>
