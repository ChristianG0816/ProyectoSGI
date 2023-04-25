<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioInsumo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_insumos', function (Blueprint $table) {
            $table->foreignId('id_insumos')->constrained('insumos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_proveedors')->constrained('proveedors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_servicios')->constrained('servicios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_insumo');
    }
}
