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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            
            $table->unsignedBigInteger('cerveza_id');
            $table->foreign('cerveza_id')->references('id')->on('cervezas');

            $table->unsignedBigInteger('michelada_id');
            $table->foreign('michelada_id')->references('id')->on('micheladas');

            $table->unsignedBigInteger('coctel_id');
            $table->foreign('coctel_id')->references('id')->on('coctels');

            $table->integer('total');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
