<?php

namespace App\Http\Livewire\Animales;

class RulesAnimales{
    public static function Rules(){
        return[
            'animales.animal' => 'required|string',
            'animales.especie' => 'required|string',
            'animales.Precio' => 'numeric|required',
            'Foto' => 'nullable|image'
        ];
    }
}
