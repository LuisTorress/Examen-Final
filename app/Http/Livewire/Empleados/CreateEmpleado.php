<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class CreateEmpleado extends Component
{
    public $PrimerNombre;
    public $SegundoNombre;
    public $ApellidoPaterno;
    Public $ApellidoMaterno;
    public $Sexo;
    public $FechaDeNacimiento;
    public $PuestoDeTrabajo;
    public $Curp;
    public $Rfc;
    public $Estado;
    public $CodigoPostal;
    public $Salario;
    public $CorreoElectronico;
    public $HorarioDeTrabajo;
    public $ÁreaDeTrabajo;
    public $Facebook;
    public $Telefono;

    public Empleado $empleados;
    public function render()
    {
        return view('livewire.empleados.create-empleado');
    }

    public function crear(){

        $empleado = new Empleado();
        $empleado->PrimerNombre = $this->PrimerNombre;
        $empleado->SegundoNombre = $this->SegundoNombre;
        $empleado->ApellidoPaterno = $this->ApellidoPaterno;
        $empleado->ApellidoMaterno = $this->ApellidoMaterno;
        $empleado->Sexo = $this->Sexo;
        $empleado->FechaDeNacimiento = $this->FechaDeNacimiento;
        $empleado->PuestoDeTrabajo = $this->PuestoDeTrabajo;
        $empleado->Curp = $this->Curp;
        $empleado->Rfc = $this->Rfc;
        $empleado->Estado = $this->Estado;
        $empleado->CodigoPostal = $this->CodigoPostal;
        $empleado->Salario = $this->Salario;
        $empleado->CorreoElectronico = $this->CorreoElectronico;
        $empleado->HorarioDeTrabajo = $this->HorarioDeTrabajo;
        $empleado->ÁreaDeTrabajo = $this->ÁreaDeTrabajo;
        $empleado->Facebook = $this->Facebook;
        $empleado->Telefono = $this->Telefono;
        $empleado->save();
        return redirect(route('empleados'));
    }

}
