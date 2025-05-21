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
    Schema::create('restaurantes', function (Blueprint $table) {
        $table->id(); // ID único del restaurante
        $table->string('nombre');
        $table->string('direccion');
        $table->string('telefono');
        $table->timestamps(); // created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
