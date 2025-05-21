<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mesa extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'capacidad', 'estado', 'restaurante_id'];

    /**
     * Una mesa pertenece a un restaurante.
     */
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    /**
     * Una mesa puede tener muchos pedidos asociados.
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
