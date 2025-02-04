<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lanchonete extends Model
{
    use HasFactory;

    protected $table = 'lanchonetes';

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'nome',
        'descricao',
        'localidade',
        'cep',
        'cnpj',
        'email',
        'telefone',
        'site',
        'status',
    ];

    /**
     * Obtém os pedidos da lanchonete.
     *
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'lanchonete_id');
    }

    /**
     * Obtém os produtos da lanchonete.
     *
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'lanchonete_id');
    }
}
