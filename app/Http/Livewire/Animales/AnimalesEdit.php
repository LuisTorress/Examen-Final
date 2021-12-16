<?php

namespace App\Http\Livewire\Animales;

use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimalesEdit extends Component
{
    use WithFileUploads;
    public Animal $animal;
    public $Foto;

    public function render()
    {
        return view('livewire.animales.animales-edit');
    }

    public function editar()
    {
        $this->validate();
        if($this->foto != null){
            if($this->animal->Foto != null){
                Storage::disk('public')->delete($this->animal->Foto);
            }
            $this->animal->Foto = Storage::disk('public')->put('images/defaultAnimal.png', $this->Foto);
        }
        $this->animal->save();
        return redirect(route('animales'));
    }

    protected function rules(){
        return RulesAnimales::Rules();
    }
}
