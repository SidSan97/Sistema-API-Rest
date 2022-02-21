<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function pagina_cadastro()
    {
        return view('cadastrar-cliente');
    }

    public function form_cadastro(Request $request)
    {
        $event = new Event;

        $event->nome  = $request->nome;
        $event->tel   = $request->tel;
        $event->cpf   = $request->cpf;
        $event->placa = $request->placa;

        $event->save();

        return redirect('/');
    }

    public function listagem()
    {
        return view('listagem-clientes');
    }
}
