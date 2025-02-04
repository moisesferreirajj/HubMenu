<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'lanchonete_id',
        'reference',
        'payment_id',
        'status',
        'total_value',
    ];

    /**
     * Obtém a lanchonete associada ao pedido.
     *
     */
    public function lanchonete()
    {
        return $this->belongsTo(Lanchonete::class);
    }

    /**
     * Os produtos que pertencem ao pedido.
     *
     */
    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'pedido_produto')
            ->withPivot('quantidade')
            ->withTimestamps();
    }
}
