<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
    use SoftDeletes;

    protected $table = 'clientes';

    protected $fillable = [
        'id',
        'nome',
        'email',
        'cpf',
        'telefone',
    ];

    public static function salvarCliente($cliente)
    {
        $cliente = new self($cliente);
        $cliente->save();
    }

    public static function resgatarTodosClientes()
    {
        $clientes = self::all();
        return $clientes;
    }
}
