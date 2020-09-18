<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido')->nullable($value=false);
            $table->string('nombre')->nullable($value=false);
            $table->string('cuil')->unique()->nullable($value=false);
            $table->string('telefono')->unique()->nullable($value=false);
            $table->string('email')->unique()->nullable($value=false);
            $table->boolean('activo')->default($value = 1);
            $table->unsignedBigInteger('profesion_id')->nullable($value=true);
            $table->unsignedBigInteger('localidad_id')->nullable($value=false);
            $table->boolean('profesional')->default($value = 1);
            $table->boolean('matriculado')->default($value = 1);
            $table->string('matricula')->nullable($value=false);
            $table->text('se_destaca')->nullable($value = true);
            $table->timestamps();
            //$table->foreign('localidad_id')->references('id')->on('localidades');
            //$table->foreign('profesion_id')->references('id')->on('profesiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
