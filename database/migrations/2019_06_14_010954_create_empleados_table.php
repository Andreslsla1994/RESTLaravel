<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id_empleado');
            $table->string('Nombres',40);
            $table->string('Apellidos',30);
            $table->string('Cedula',10)->unique();
            $table->bigInteger('Provincia')->references('id_provincia')->on('provincias');
            $table->date('FechaNacimiento');
            $table->string('Email',50);
            $table->date('FechaIngreso');
            $table->string('Cargo',50);
            $table->string('Departamento',50);
            $table->bigInteger('ProvinciaLaboral')->references('id_provincia')->on('provincias');
            $table->float('Sueldo');
            $table->boolean('JornadaParcial');
            $table->string('ObservacionesPersonales',500)->nullable();
            $table->string('ObservacionesLaborales',500)->nullable();
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
