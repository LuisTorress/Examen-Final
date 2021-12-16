<?php

namespace App\Http\Livewire\Animales;

use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimalesDelete extends Component
{
    use WithFileUploads;
    public Animal $animal;
    public $Foto;

    public function render()
    {
        return view('livewire.animales.animales-delete');
    }

    public function delete(){
        $this->animal->delete();
        Storage::disk('public')->delete($this->animal->Foto);
        return redirect(route('animales'));
    }
}
