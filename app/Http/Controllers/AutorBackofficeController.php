<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autor = Autor::find(1);
        $dennied = false;

        return view('backoffice.autor', ['autor' => $autor, 'dennied' => $dennied]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Autor $autor)
    {
        $msg = session('msg', '');
       
        $dennied = false;
        return view('backoffice.autor_edit', ['autor' => $autor, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $regras = [
            'foto' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'foto.min' => 'O campo nao pode ficar vazio',
            'texto.max' => 'O campo nao pode ficar vazio'
        ];

        $request->validate($regras, $feedback);

        $autor->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('autor.edit', ['autor' => $autor])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
