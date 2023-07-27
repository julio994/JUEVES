<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cervezas', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('Nombre');
            $table->integer('Valor_compra');
            $table->integer('Valor_venta');
            $table->integer('Cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cervezas');
    }
};
