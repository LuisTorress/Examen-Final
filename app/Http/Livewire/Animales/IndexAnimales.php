<?php

namespace App\Http\Livewire\Animales;

use App\Models\Animal;
use Livewire\Component;
use Livewire\WithPagination;

class IndexAnimales extends Component
{
     protected $paginationTheme = 'bootstrap';
     use WithPagination;
     public $search;
     public $cargado = false;

    public function render()
    {
        $cursos = ($this->cargado == True) ? Animal::where('animal', 'LIKE', '%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.animales.index-animales', compact('animales'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
