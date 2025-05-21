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
        $table->id();
        $table->decimal('total', 10, 2);
        $table->dateTime('fecha_hora');
        $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
        $table->string('estado')->default('pendiente'); // pendiente, en_proceso, completado, cancelado
        $table->string('tipo_pago')->default('efectivo'); // efectivo, tarjeta, etc.
        $table->foreignId('restaurante_id')->constrained()->onDelete('cascade');
        $table->foreignId('mesa_id')->constrained()->onDelete('cascade');
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
