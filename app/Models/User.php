<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles; // HasRoles es de Spatie para gestión de roles

    protected $fillable = ['name', 'email', 'password', 'restaurante_id'];

    /**
     * Un usuario pertenece a un restaurante.
     */
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    /**
     * Un usuario puede haber creado muchos pedidos.
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
