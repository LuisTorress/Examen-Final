<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class IndexEmpleados extends Component
{

    public function render()
    {
        $empleados = Empleado::paginate(20);
        return view('livewire.empleados.index-empleados', compact('empleados'));
    }
}
