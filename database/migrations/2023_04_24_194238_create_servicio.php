<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre_Servicio', 50);
            $table->string('descripcion_Servicio', 300);
            $table->float('costo_Servicio',8,2);
            $table->float('precio_Venta_Servicio',8,2);
            $table->integer('tiempo_Entrega_Servicio');    
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
        Schema::dropIfExists('servicio');
    }
}
