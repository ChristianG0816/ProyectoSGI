<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->foreignId('id_proveedors')->constrained('proveedors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre_Insumo', 100);
            $table->float('costo_Unitario_Insumo',8,2);   
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
        Schema::dropIfExists('insumo');
    }
}
