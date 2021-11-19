<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadosEdit extends Component
{
    public Empleado $empleados;
    public function render()
    {
        return view('livewire.empleados.empleados-edit');
    }

    public function editar()
    {
        $this->validate();
        $this->empleados->save();
        return redirect(route('empleados'));
    }

    protected function rules()
    {
        return [
            'empleados.PrimerNombre' => 'required|string',
            'empleados.SegundoNombre' => 'required|string',
            'empleados.ApellidoPaterno' => 'required|string',
            'empleados.ApellidoMaterno' => 'required|string',
            'empleados.Sexo' => 'required|string',
            'empleados.FechaDeNacimiento' => 'required|string',
            'empleados.PuestoDeTrabajo' => 'required|string',
            'empleados.Curp' => 'required|string',
            'empleados.Rfc' => 'required|string',
            'empleados.Estado' => 'required|string',
            'empleados.CodigoPostal' => 'required|numeric',
            'empleados.Salario' => 'required|numeric',
            'empleados.CorreoElectronico' => 'required|string',
            'empleados.HorarioDeTrabajo' => 'required|string',
            'empleados.ÁreaDeTrabajo' => 'required|string',
            'empleados.Facebook' => 'required|string',
            'empleados.Telefono' => 'required|numeric'
        ];
    }
}
