<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuarios{
    public static function Reglas(){
        return[
            'usuario.nombre' => 'required|string',
            'foto' => 'nullable|image',
            'usuario.email' => 'required|string',
            'usuario.password' => 'required|string',
        ];
    }
}
