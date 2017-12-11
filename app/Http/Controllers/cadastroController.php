<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;

class cadastroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cadastros = Cadastro::orderBy('created_at', 'desc')->paginate(10);
        return view('cadastro.crud', ['cadastros' => $cadastros]);
    }

    public function create()
    {
        return view('cadastro.create');
    }

    public function store(Request $request)
    {
        $cadastro = new Cadastro();
        $cadastro->nome = $request->input('nome');
        $cadastro->email = $request->input('email');
        $cadastro->endereco = $request->input('endereco');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->cidade = $request->input('cidade');
        $cadastro->estado = $request->input('estado');
        $cadastro->save();
        return redirect('cadastro');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('cadastro.update', compact('cadastro'));
    }

    public function update(Request $request, $id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->nome = $request->input('nome');
        $cadastro->email = $request->input('email');
        $cadastro->endereco = $request->input('endereco');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->cidade = $request->input('cidade');
        $cadastro->estado = $request->input('estado');
        $cadastro->save();
        return redirect('cadastro');
    }

    public function destroy($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();
        return redirect('cadastro');
    }
}
