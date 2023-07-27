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
        Schema::create('coctels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');

            $table->unsignedBigInteger('adicional_id');
            $table->foreign('adicional_id')->references('id')->on('adicionals');

            $table->integer('Valor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coctels');
    }
};
