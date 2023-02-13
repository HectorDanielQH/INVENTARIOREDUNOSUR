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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cantidad');
            $table->string('codigo');
            $table->string('detalle');
            $table->unsignedBigInteger('id_activo');
            $table->foreign('id_activo')->references('id')->on('activos');
            $table->string('serie');
            $table->string('estado');
            $table->decimal('precio',8,2);
            $table->date('fecha_compra');
            $table->unsignedBigInteger('id_unidad');
            $table->foreign('id_unidad')->references('id')->on('unidades');
            $table->unsignedBigInteger('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('sucursales');
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
        Schema::dropIfExists('inventarios');
    }
};
