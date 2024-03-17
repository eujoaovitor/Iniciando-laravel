<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteResquest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // LISTAGEM DE CLIENTES    
    public function index()
    {
        // BUSCAR INFORMAÇÃO NO BD
        $cliente = Cliente::orderByDesc('id')->get();

        // RETORNA O LAYOUT(VIEW)
        return view("cliente/index", ['cliente' => $cliente]);
    }

    // FORMULARIO DE CADASTRO DE CLIENTE
    public function create()
    {
        return view("cliente/create");
    }

    // PAGINA MOSTRAR RESULTADO
    public function mostrar()
    {
        return view("cliente/mostrar");
    }

    // SALVAR FORMULARIO NO BANCO
    public function store(ClienteResquest $resquest)
    {
        //VALIDAR OS CAMPOS
        $resquest->validated();

        //SALVA NO BD
        Cliente::create($resquest->all());

        //REDIRECIONAMENTO
        return redirect()->route('cliente.mostrar')->with('sucesso', 'Cliente cadastrado com sucesso!!');
    }

    // VISUALIZAR OS DADOS A PARTIR DO ID
    public function editar(Cliente $cliente)
    {
        return view('cliente/editar', ['cliente' => $cliente]);
    }

    // ATUALIZAR OS DADOS DO BD A PARTIR DO ID
    public function update(ClienteResquest $resquest, Cliente $cliente)
    {
        //VALIDAR OS CAMPOS
        $resquest->validated();

        // EDITAR OS DADOS NO BD
        $cliente->update([
            'nome' => $resquest->nome,
            'cpf' => $resquest->cpf,
            'email' => $resquest->email,
            'fone' => $resquest->fone,
            'nascimento' => $resquest->nascimento
        ]);

        //REDIRECIONAMENTO
        return redirect()->route('cliente.index')->with('sucesso', 'Cliente editado com sucesso!!');
    }
}
