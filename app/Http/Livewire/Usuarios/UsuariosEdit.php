<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\InfoUsuarios;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUsuario extends Component
{
    use WithFileUploads;
    public InfoUsuarios $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.edit-usuario');
    }

    public function editarUsuario(){
        $this->validate();
        if($this->foto!=null){
            if($this->usuario->foto!=null){
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return RulesUsuarios::Reglas();
    }
}
