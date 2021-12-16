<div>
    <div class="row ">

        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Loading...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
          </div>

        <div class="col-3">
            <img style="width: 250px; height: 160px;" src="{{ $Foto != null ? $Foto->temporaryUrl() : Storage::disk('public')->url('images/animales/defaultAnimal.png') }}" alt="">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Subir imagen</label>
                  <input wire:model = "Foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                  @error('Foto') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
              </form>
        </div>

        <div class="mx-auto col-6 ">
                <div class="form-group">
                    <label>Curso</label>
                    <input wire:model = "animal" type="text" class="form-control">
                    @error('animales.animal') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Especie</label>
                    <input wire:model = "especie" type="text" class="form-control">
                    @error('animales.especie') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input wire:model = "precio" type="text" class="form-control">
                    @error('animales.precio') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <button wire:click = "crear" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Agregar</button>
        </div>
    </div>
</div>
