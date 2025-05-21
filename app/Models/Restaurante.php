<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    // Permite asignación masiva
    protected $fillable = ['nombre', 'direccion', 'telefono'];

    /**
     * Un restaurante tiene muchos usuarios (empleados, incluyendo admin, mesero, caja)
     */
    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Un restaurante puede tener muchos clientes.
     */
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    /**
     * Un restaurante tiene muchos pedidos.
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    /**
     * Un restaurante tiene muchas mesas.
     */
    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }
}
