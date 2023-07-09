<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::find(1);
        $dennied = false;
        
        return view('backoffice.home', ['home' => $home, 'dennied' => $dennied]);
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
    public function edit(Home $home)
    {

        $msg = session('msg', '');

        $dennied = false;
        return view('backoffice.home_edit', ['home' => $home, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $regras = [
            'imagem' => 'min:3',
            'texto' => 'min:3',
        ];

        $feedback = [
            'imagem.min' => 'O campo nao pode ficar vazio',
            'texto.max' => 'O campo nao pode ficar vazio'
        ];

        $request->validate($regras, $feedback);

        $home->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('home.edit', ['home' => $home])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
