<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function crear()
    {
        $alumno = new Alumno();
        $alumno->expediente = '18304004';
        $alumno->nombre_alumno = 'Luis Prieto Torres';
        $alumno->carrera = 15;
        $alumno->edad = 21;
        $alumno->save();

    }
}
