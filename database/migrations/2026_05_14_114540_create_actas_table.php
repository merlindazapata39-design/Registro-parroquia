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
        Schema::create('actas', function (Blueprint $table) {
            $table->id();
            $table->string('nro_serie');
            $table->string('nro_libro');
            $table->string('nro_pagina');
            $table->string('nro_certificado');
            $table->date('fecha_registro');
            $table->text('observaciones')->nullable();
            $table->foreignId('sacerdote_id')->constrained('sacerdotes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actas');
    }
};
