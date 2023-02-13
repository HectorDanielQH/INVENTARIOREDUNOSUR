<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('rol')->default('personal');
            $table->unsignedBigInteger('usuario')->nullable();
            $table->foreign('usuario')->references('id')->on('users');
            $table->unsignedBigInteger('unidad');
            $table->foreign('unidad')->references('id')->on('unidades');
            $table->unsignedBigInteger('departamento');
            $table->foreign('departamento')->references('id')->on('sucursales');
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
        Schema::dropIfExists('personales');
    }
};
