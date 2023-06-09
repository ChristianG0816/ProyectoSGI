<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->foreignId('id_servicios')->constrained('servicios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_empleados')->constrained('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_Venta');
            $table->integer('cantidad_Venta');
            $table->float('neto_Venta',8,2);
            $table->float('iva_Venta',8,2);
            $table->float('total_Venta',8,2);
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
        Schema::dropIfExists('venta');
    }
}
