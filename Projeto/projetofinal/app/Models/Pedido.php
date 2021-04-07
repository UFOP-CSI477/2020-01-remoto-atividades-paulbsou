<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = ['nome', 'email', 'telefone', 'cpf', 'produto_id'];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
