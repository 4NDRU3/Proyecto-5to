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
    Schema::create('mesas', function (Blueprint $table) {
        $table->id();
        $table->string('numero'); // Número o nombre de la mesa
        $table->integer('capacidad'); // Cantidad de personas
        $table->string('estado')->default('disponible'); // disponible, ocupada, reservada, etc.
        $table->foreignId('restaurante_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
