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
        Schema::create('remisiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numRemision');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('personales');
            $table->unsignedBigInteger('idInventario');
            $table->foreign('idInventario')->references('id')->on('inventarios');
            $table->unsignedBigInteger('departamento');
            $table->foreign('departamento')->references('id')->on('sucursales');
            $table->unsignedBigInteger('cantidad');
            $table->string('detalledevolucion')->nullable();
            $table->date('fechadevolucion')->nullable();
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
        Schema::dropIfExists('remisiones');
    }
};
