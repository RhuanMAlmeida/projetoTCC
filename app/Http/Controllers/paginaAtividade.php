<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\atividades;

class paginaAtividade extends Controller
{
    public function paginaAtividade(Request $request, $id_cliente = null)
    {
        // $dados = $request->all();
        if (isset($id_cliente)) {
            $atividades = atividades::resgatarTodasAtividadesPorCliente($id_cliente);
        } else {
            $atividades = atividades::resgatarTodasAtividades();
        }
        return view('atividades', ['atividades' => $atividades]);
    }
}
