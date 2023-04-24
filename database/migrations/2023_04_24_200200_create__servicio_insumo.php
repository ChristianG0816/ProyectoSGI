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
        Schema::create('servicio_insumo', function (Blueprint $table) {
            $table->foreignId('id_insumo')->constrained('insumo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_proveedor')->constrained('proveedor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_servicio')->constrained('servicio')->onDelete('cascade')->onUpdate('cascade');
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
