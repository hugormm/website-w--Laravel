<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ConfigBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msg = session('msg', '');

        $user = User::find(1);
        $dennied = false;

        return view('backoffice.configuracoes', ['user' => $user, 'dennied' => $dennied, 'msg' => $msg]);
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
    public function update(Request $request, $id)
    {
        $regras = [
            'senha_actual' => 'min:3',
            'nova_senha' => 'min:3',
        ];

        $feedback = [
            'senha_actual.min' => 'O campo nao pode ficar vazio',
            'nova_senha' => 'O campo nao pode ficar vazio'
        ];

        $request->validate($regras, $feedback);

        $user = User::find($id);

        if($request->get('senha_actual') == $user->password){
            $user->password = $request->get('nova_senha');
            $user->save();

            $msg = 'Senha alterada com sucesso';

            return redirect()->route('configuracoes.index')->with('msg', $msg);

        } else {
            $msg = 'senha incorrecta, tente novamente';

            return redirect()->route('configuracoes.index')->with('msg', $msg);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
