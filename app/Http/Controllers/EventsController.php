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
        $event = Event::All();

        return view('listagem-clientes', compact('event'));
    }

    public function dados_cliente($id)
    {
        $event = Event::findOrFail($id);

        return view('dados-cliente', ['event' => $event]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('listagem-clientes')->with('msg', 'Cliente excluido com sucesso');
    }

    public function editar_dados($id)
    {
        $event = Event::findOrFail($id);

        return view('editar-dados', ['event' => $event]);
    }

    public function editar(Request $request)
    {
        Event::findOrFail($request->id)->update($request->all());

        return redirect('listagem-clientes')->with('msg', 'Dados editado com sucesso!');
    }
}
