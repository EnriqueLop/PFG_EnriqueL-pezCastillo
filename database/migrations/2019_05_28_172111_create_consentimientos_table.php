<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsentimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consentimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('guardar_datos');
            $table->boolean('asistencia');
            $table->integer('hijo_id');
            $table->integer('actividad_id');
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
        Schema::dropIfExists('consentimientos');
    }
}
