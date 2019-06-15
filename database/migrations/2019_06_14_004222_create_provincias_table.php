<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->bigIncrements('id_provincia');
            $table->string('nombre_provincia', 30);
            $table->string('capital_provincia',30);
            $table->string('descripcion_provincia',1000);
            $table->decimal('poblacion_provincia',10,2);
            $table->decimal('superficie_provincia',10,2);
            $table->decimal('latitud_provincia',10,8);
            $table->decimal('longitud_provincia',10,8);
            $table->bigInteger('id_region');
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
        Schema::dropIfExists('provincias');
    }
}
