<?php

namespace App\Http\Livewire\Animales;

use App\Http\Livewire\Animales\RulesAnimales;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnimalesCreate extends Component
{
    use WithFileUploads;
    public Animal $animal;
    public $Foto;


    public function mount(){
        $this->Curso = new Animal();
    }

    public function render()
    {
        return view('livewire.animales.animales-create');
    }

    public function crear(){
        $this->validate();
        if($this->Foto != null) {
            $this->animal->Foto = Storage::disk('public')->put('images/animales', $this->Foto);
        }

        $this->animal->save();
        return redirect(route('animales'));
    }

    protected function rules(){
        return RulesAnimales::Rules();
    }

}

