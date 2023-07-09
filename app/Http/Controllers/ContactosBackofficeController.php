<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactosBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msg = session('msg', '');

        $dennied = false;
        $contactos = Contacto::find(1);

        return view('backoffice.contactos', ['contactos' => $contactos, 'dennied' => $dennied, 'msg' => $msg]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        $regras = [
            'telefone' => 'min:3',
            'morada' => 'min:3',
            'email' => 'email|min:3',
            'horario' => 'min:3',
        ];

        $feedback = [
            'telefone.min' => 'O campo nao pode ficar vazio',
            'morada.min' => 'O campo nao pode ficar vazio',
            'email.email' => 'Tem que preencher um email valido',
            'email.min' => 'O campo nao pode ficar vazio',
            'horario.min' => 'O campo nao pode ficar vazio'
        ];

        $request->validate($regras, $feedback);

        $contacto->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('contactos.index', ['contacto' => $contacto])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
