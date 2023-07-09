<?php

namespace App\Http\Controllers;

use App\Models\Cabecalho;
use Illuminate\Http\Request;

class CarousselBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dennied = false;
        $cabecalho = Cabecalho::all();

        return view('backoffice.caroussel', ['cabecalho' => $cabecalho, 'dennied' => $dennied]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $msg = session('msg', '');

        $dennied = false;
        $caroussel = Cabecalho::all();
        return view('backoffice.caroussel_create', ['caroussel' => $caroussel, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'imagem' => 'min:3',
            'imagem_mobile' => 'min:3',
            'titulo' => 'min:3',
            'texto' => 'min:3',
            'tag' => 'min:3',
            'saber_mais' => 'min:3',
        ];

        $feedback = [
            'imagem.min' => 'O campo nao pode ficar vazio',
            'imagem_mobile.min' => 'O campo nao pode ficar vazio',
            'titulo.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
            'tag.min' => 'O campo nao pode ficar vazio',
            'saber_mais.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        Cabecalho::create($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('caroussel.create')->with('msg', $msg);
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

        $caroussel = Cabecalho::find($id);

        $dennied = false;

        return view('backoffice.caroussel_edit', ['caroussel' => $caroussel, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cabecalho $caroussel)
    {
        $regras = [
            'imagem' => 'min:3',
            'imagem_mobile' => 'min:3',
            'titulo' => 'min:3',
            'texto' => 'min:3',
            'tag' => 'min:3',
            'saber_mais' => 'min:3',
        ];

        $feedback = [
            'imagem.min' => 'O campo nao pode ficar vazio',
            'imagem_mobile.min' => 'O campo nao pode ficar vazio',
            'titulo.min' => 'O campo nao pode ficar vazio',
            'texto.min' => 'O campo nao pode ficar vazio',
            'tag.min' => 'O campo nao pode ficar vazio',
            'saber_mais.min' => 'O campo nao pode ficar vazio',
        ];

        $request->validate($regras, $feedback);
        
        $caroussel->update($request->all());

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('caroussel.edit', ['caroussel' => $caroussel])->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $caroussel = Cabecalho::find($id);

        $caroussel->delete();

        return redirect()->route('caroussel.index');
    }
}
