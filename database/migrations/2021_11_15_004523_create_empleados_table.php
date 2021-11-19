<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Sexo');
            $table->date('FechaDeNacimiento');
            $table->string('PuestoDeTrabajo');
            $table->string('Curp');
            $table->string('Rfc');
            $table->string('Estado');
            $table->integer('CodigoPostal');
            $table->integer('Salario');
            $table->string('CorreoElectronico');
            $table->time('HorarioDeTrabajo');
            $table->string('ÁreaDeTrabajo');
            $table->string('Facebook');
            $table->integer('Telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
