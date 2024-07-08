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
        Schema::create('reservas_agencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_agencia');
            $table->unsignedBigInteger('codigo_habitacion');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('facturas');
            $table->foreign('codigo_agencia')->references('id')->on('agencias')->onDelete('cascade');
            $table->foreign('codigo_habitacion')->references('id')->on('habitacions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_agencia');
    }
};
