<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'fecha_hora', 'usuario_id', 'cliente_id', 'restaurante_id', 'mesa_id'];

    /**
     * Un pedido pertenece a un usuario (mesero, caja).
     */
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Un pedido pertenece a un cliente.
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * Un pedido pertenece a un restaurante.
     */
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    /**
     * Un pedido pertenece a una mesa.
     */
    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    /**
     * Un pedido tiene muchos productos (detalle).
     */
    public function detalles()
    {
        return $this->hasMany(DetallePedido::class);
    }

    /**
     * Un pedido tiene un pago.
     */
    public function pago()
    {
        return $this->hasOne(Pago::class);
    }
}
