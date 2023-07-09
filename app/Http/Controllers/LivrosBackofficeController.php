<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dennied = false;
        $livros = Livro::all();

        return view('backoffice.livros', ['livros' => $livros, 'dennied' => $dennied]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $msg = session('msg', '');

        $dennied = false;
        $livros = Livro::all();
        return view('backoffice.livros_create', ['livros' => $livros, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'imagem' => 'min:3',
            'titulo' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'imagem.min' => 'O campo nao pode ficar vazio',
            'titulo.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        Livro::create($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('livros.create')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $msg = session('msg', '');

        $livro = Livro::find($id);

        $dennied = false;

        return view('backoffice.livros_edit', ['livro' => $livro, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        $regras = [
            'imagem' => 'min:3',
            'titulo' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'imagem.min' => 'O campo nao pode ficar vazio',
            'titulo.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        $livro->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('livros.edit', ['livro' => $livro])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $livro = Livro::find($id);

        $livro->delete();

        return redirect()->route('livros.index');
    }
}
