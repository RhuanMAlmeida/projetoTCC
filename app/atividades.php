<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class atividades extends Model
{
    use SoftDeletes;

    protected $table = 'atividades';

    protected $fillable = [
        'id',
        'titulo',
        'tipo',
        'assunto',
        'data_conclusao',
        'detalhe',
        'status',
        'id_cliente',
    ];

    public static function salvarAtividade($atividade)
    {
        $atividade = new self($atividade);
        $atividade->save();
    }

    public static function resgatarTodasAtividadesPorCliente($idCliente)
    {
        $atividades = self::where('id_cliente', $idCliente)->get();
        return $atividades;
    }

    public static function resgatarTodasAtividades()
    {
        $atividades = self::all();
        return $atividades;
    }
}
