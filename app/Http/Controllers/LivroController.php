<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $livros = Livro::all();

       return view('livros.index', ['livros' => $livros]);
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=> 'required',
            'autor'=>'required',
            'quantidade'=>'required'
        ]);

        $livros = new Livro();
        $livros->nome= $request->input('nome');
        $livros->autor = $request->input('autor');
        $livros->quantidade = $request->input('quantidade');

        $livros->save();

        return redirect()->route('livros.index');
    }

    public function show(string $id)
    {
        $livro  = Livro::find($id);

        if(!$livro){
            return abort(404);
        }

        return view('livros.show', ['livro' => $livro]);
    }

    public function edit(string $id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return abort(404); 
        }

        return view('livros.edit', ['livro' => $livro]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome'=> 'required',
            'autor'=>'required',
            'quantidade'=>'required'
        ]);

        $livro  = Livro::find($id);

        if (!$livro) {
            return abort(404); 
        }

        $livro->update([
            'nome'=> $request->input('nome'),
            'autor'=>$request->input('autor'),
            'quantidade'=>$request->input('quantidade')
        ]);
        return redirect()->route('livros.index')->with('sucesso', 'Livro atualizado com sucesso!');
    }


    public function destroy(string $id)
    {
        $livro  = Livro::find($id);

        if (!$livro) {
            return abort(404); 
        }

        $livro->delete();

        return redirect()->route('livros.index')->with('sucesso', 'Livro excluido com sucesso!');
    }
}
