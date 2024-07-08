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
        Schema::create('reservas_particular', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_particular');
            $table->unsignedBigInteger('codigo_habitacion');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('facturas');
            $table->foreign('codigo_particular')->references('id')->on('particulars')->onDelete('cascade');
            $table->foreign('codigo_habitacion')->references('id')->on('habitacions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_particular');
    }
};
