<div>
    <form wire:submit.prevent="editar">
    <div class="row ">

        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Loading...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
          </div>

        <div class="col-4">

            @if ($Foto != null)
                <img style="width: 250px; height: 160px;" src="{{ $Foto->temporaryUrl() }}" alt="">
            @else
                <img style="width: 250px; height: 160px;"
                    src="{{ Storage::disk('public')->url($animal->Foto != null ? $Curso->Foto : 'images/animales/defaultAnimal.png') }}"
                    alt="">
            @endif

            <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Subir imagen</label>
                  <input wire:model = "animales.Foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                  @error('animales.Foto') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

        <div class="col-6 mx-auto">
            <form>
                <div class="form-group">
                    <label>Animal</label>
                    <input wire:model = "animales.animal" type="text" class="form-control">
                    @error('animales.animal') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <input wire:model = "animales.especie" type="text" class="form-control">
                    @error('animales.Categoria') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input wire:model = "animales.Precio" type="text" class="form-control">
                    @error('animales.Precio') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{route('animales')}}" type="submit" class="btn btn-success btn-sm">Regresar</a>
            </form>
        </div>

    </div>
    </form>
</div>
