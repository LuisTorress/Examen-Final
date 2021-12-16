<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\InfoUsuarios;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteUsuario extends Component
{
    use WithFileUploads;
    public InfoUsuarios $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.delete-usuario');
    }

    public function eliminarUsuario(){
        $this->usuario->delete();
        Storage::disk('public')->delete($this->usuario->foto);

        return redirect(route('usuarios'));
    }
}
