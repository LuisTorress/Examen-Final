<div>

    <div class="row">

        <div class="mx-auto col-md-5 ">
            <img class="mx-auto d-block" style="width: 170px; height: 170px;"
                src="{{ Storage :: disk('public')->url('images/usuarios/defaultUsuario.png') }}" alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Correo Electronico</label>
                    <input wire:model = "email" type="email" class="form-control" placeholder="ejemplo@gmail.com">
                    @error('email') <b class="text-danger">{{$message}}</b>@enderror

                    @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input wire:model = "password" placeholder="********" type="password" class="form-control">
                    @error('password') <b class="text-danger">{{$message}}</b>@enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>

    </div>



</div>
