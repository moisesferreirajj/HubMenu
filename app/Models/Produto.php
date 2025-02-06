<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'lanchonete_id',
    ];

    protected $table = 'produtos';

    /**
     * Obtém a lanchonete associada ao produto.
     *
     */
    public function lanchonete()
    {
        return $this->belongsTo(Lanchonete::class);
    }

    /**
     * Os pedidos que incluem este produto.
     *
     */
    public function pedidos()
    {
        return $this->belongsToMany(Pedidos::class, 'pedido_produto')
            ->withPivot('quantidade')
            ->withTimestamps();
    }
}
