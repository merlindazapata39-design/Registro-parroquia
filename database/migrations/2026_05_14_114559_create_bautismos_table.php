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
        Schema::create('bautismos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acta_id')->constrained('actas');
            $table->foreignId('persona_id')->constrained('personas');
            $table->date('fecha_bautizo');
            $table->string('lugar_bautizo');
            $table->string('padrino');
            $table->string('madrina');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bautismos');
    }
};
