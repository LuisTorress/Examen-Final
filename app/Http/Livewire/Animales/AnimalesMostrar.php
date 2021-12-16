<?php

namespace App\Http\Livewire\Animales;

use App\Models\Animal;
use Livewire\Component;

class AnimalesMostrar extends Component
{
    public Animal $animal;
    public $Foto;
    public function render()
    {
        return view('livewire.animales.animales-mostrar');;
    }
}
