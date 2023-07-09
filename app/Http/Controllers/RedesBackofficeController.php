<?php

namespace App\Http\Controllers;

use App\Models\RedeSocial;
use Illuminate\Http\Request;

class RedesBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redes = RedeSocial::all();
        $dennied = false;
        
        return view('backoffice.redes', ['redes' => $redes, 'dennied' => $dennied]);
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
    public function edit($id)
    {
        $msg = session('msg', '');

        $rede = RedeSocial::find($id);

        $dennied = false;

        return view('backoffice.redes_edit', ['rede' => $rede, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RedeSocial $rede)
    {
        $regras = [
            'link' => 'min:3',
        ];

        $feedback = [
            'link.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        $rede->link = $request->get('link');

        $rede->save();

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('redes.edit', ['rede' => $rede])->with('msg', $msg);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
