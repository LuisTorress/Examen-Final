<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\InfoUsuarios;

class MostrarUsuario extends Component
{
    public InfoUsuarios $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.mostrar-usuario');
    }
}
