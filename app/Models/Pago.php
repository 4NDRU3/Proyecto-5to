<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'monto', 'metodo', 'fecha', 'estado'];

    /**
     * Un pago pertenece a un pedido.
     */
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
