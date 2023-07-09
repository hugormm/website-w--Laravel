<?php

namespace App\Http\Controllers;

use App\Models\Imprensa;
use Illuminate\Http\Request;

class ImprensaBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dennied = false;
        $imprensa = Imprensa::all();

        return view('backoffice.imprensa', ['imprensa' => $imprensa, 'dennied' => $dennied]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $msg = session('msg', '');

        $dennied = false;
        $imprensa = Imprensa::all();

        return view('backoffice.imprensa_create', ['imprensa' => $imprensa, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'titulo' => 'min:3',
            'imagem' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'titulo.min' => 'O campo nao pode ficar vazio',
            'imagem.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        Imprensa::create($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('imprensa.create')->with('msg', $msg);
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
    public function edit( $id)
    {
        $msg = session('msg', '');

        $imprensa = Imprensa::find($id);

        $dennied = false;

        return view('backoffice.imprensa_edit', ['imprensa' => $imprensa, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imprensa $imprensa)
    {
        $regras = [
            'titulo' => 'min:3',
            'imagem' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'titulo.min' => 'O campo nao pode ficar vazio',
            'imagem.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        $imprensa->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('imprensa.edit', ['imprensa' => $imprensa])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imprensa = Imprensa::find($id);

        $imprensa->delete();

        return redirect()->route('imprensa.index');
    }
}
