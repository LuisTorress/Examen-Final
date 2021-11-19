<div>
    <form wire:submit.prevent="editar">
    <div class="row ">
        <div class="col-6 mx-auto">
            <form>

                <div class="form-group">
                    <label>Primer nombre</label>
                    <input wire:model = "empleados.PrimerNombre" type="text" class="form-control">
                    @error('empleados.PrimerNombre') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Segundo nombre</label>
                    <input wire:model = "empleados.SegundoNombre" type="text" class="form-control">
                    @error('empleados.SegundoNombre') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Apellido paterno</label>
                    <input wire:model = "empleados.ApellidoPaterno" type="text" class="form-control">
                    @error('empleados.ApellidoPaterno') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Apellido materno</label>
                    <input wire:model = "empleados.ApellidoMaterno" type="text" class="form-control">
                    @error('empleados.ApellidoMaterno') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Sexo</label>
                    <input wire:model = "empleados.Sexo" type="text" class="form-control">
                    @error('empleados.Sexo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input wire:model = "empleados.FechaDeNacimiento" type="date" class="form-control">
                    @error('empleados.FechaDeNacimiento') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Puesto de trabajo</label>
                    <input wire:model = "empleados.PuestoDeTrabajo" type="text" class="form-control">
                    @error('empleados.PuestoDeTrabajo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Curp</label>
                    <input wire:model = "empleados.Curp" type="text" class="form-control">
                    @error('empleados.Curp') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Rfc</label>
                    <input wire:model = "empleados.Rfc" type="text" class="form-control">
                    @error('empleados.Rfc') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <input wire:model = "empleados.Estado" type="text" class="form-control">
                    @error('empleados.Estado') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Codigo postal</label>
                    <input wire:model = "empleados.CodigoPostal" type="text" class="form-control">
                    @error('empleados.CodigoPostal') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Salario</label>
                    <input wire:model = "empleados.Salario" type="text" class="form-control">
                    @error('empleados.Salario') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Correo electronico</label>
                    <input wire:model = "empleados.CorreoElectronico" type="text" class="form-control">
                    @error('empleados.CorreoElectronico') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Horario de trabajo</label>
                    <input wire:model = "empleados.HorarioDeTrabajo" type="text" class="form-control">
                    @error('empleados.HorarioDeTrabajo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Área de trabajo</label>
                    <input wire:model = "empleados.ÁreaDeTrabajo" type="text" class="form-control">
                    @error('empleados.AreaDeTrabajo') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Facebook</label>
                    <input wire:model = "empleados.Facebook" type="text" class="form-control">
                    @error('empleados.Facebook') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Telefono</label>
                    <input wire:model = "empleados.Telefono" type="text" class="form-control">
                    @error('empleados.Telefono') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{route('empleados')}}" type="submit" class="btn btn-success btn-sm">Regresar</a>
            </form>
        </div>

    </div>
    </form>
</div>
