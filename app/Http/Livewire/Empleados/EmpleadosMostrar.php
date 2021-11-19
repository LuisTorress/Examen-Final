<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadosMostrar extends Component
{
    public Empleado $empleados;
    public function render()
    {
        return view('livewire.empleados.empleados-mostrar');
    }
}
