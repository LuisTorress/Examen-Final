<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\InfoUsuarios;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $usuarios = ($this->cargado==True) ? InfoUsuarios::where('Nombre', 'LIKE', '%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.usuarios.index-usuarios', compact('usuarios'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
