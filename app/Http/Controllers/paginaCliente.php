<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;

class paginaCliente extends Controller
{
    public function paginaCliente(Request $request)
    {
        $dados = $request->all();
        $clientes = clientes::resgatarTodosClientes();
        return view('clientes', ['clientes' => $clientes]);
    }
}
