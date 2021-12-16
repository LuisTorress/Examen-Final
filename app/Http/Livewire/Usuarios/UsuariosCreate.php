<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\InfoUsuarios;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuario extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function mount(){
        $this->usuario = new Usuario();
    }

    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }

    public function crearUsuario(){
        $this->validate();
        if($this->foto!=null){
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return RulesUsuarios::Reglas();
    }
}
