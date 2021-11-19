<div>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-center">{{$empleados->ID}}</h5>
          <p class="card-text text-center">{{$empleados->PrimerNombre}}</p>
          <p class="card-text text-center">{{$empleados->SegundoNombre}}</p>
          <p class="card-text text-center">{{$empleados->ApellidoPaterno}}</p>
          <p class="card-text text-center">{{$empleados->ApellidoMaterno}}</p>
          <p class="card-text text-center">{{$empleados->Sexo}}</p>
          <p class="card-text text-center">{{$empleados->FechaDeNacimineto}}</p>
          <p class="card-text text-center">{{$empleados->PuestoDeTrabajo}}</p>
          <p class="card-text text-center">{{$empleados->Curp}}</p>
          <p class="card-text text-center">{{$empleados->Rfc}}</p>
          <p class="card-text text-center">{{$empleados->Estado}}</p>
          <p class="card-text text-center">{{$empleados->CodigoPostal}}</p>
          <p class="card-text text-center">{{$empleados->Salario}}</p>
          <p class="card-text text-center">{{$empleados->CorreoElectronico}}</p>
          <p class="card-text text-center">{{$empleados->HorarioDeTrabajo}}</p>
          <p class="card-text text-center">{{$empleados->ÁreaDeTrabajo}}</p>
          <p class="card-text text-center">{{$empleados->Facebook}}</p>
          <p class="card-text text-center">{{$empleados->Telefono}}</p>
          <a  href="{{route('empleados')}}" type="submit" class="btn btn-info">Regresar</a>
        </div>
      </div>
</div>
