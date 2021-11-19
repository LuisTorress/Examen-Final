<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadosDelete extends Component
{
    public Empleado $empleados;
    public function render()
    {
        return view('livewire.empleados.empleados-delete');
    }

    public function delete(){
        $this->empleados->delete();
        return redirect(route('empleados'));
    }
}
