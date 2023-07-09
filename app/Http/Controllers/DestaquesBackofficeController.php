<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Livro;
use Illuminate\Http\Request;

class DestaquesBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        $home = Home::find(1);

        $books = [];

        if($home->destaque_1 != 0){
            $books[] = $livros->find($home->destaque_1);
        }
        if($home->destaque_2 != 0){
            $books[] = $livros->find($home->destaque_2);
        }
        if($home->destaque_3 != 0){
            $books[] = $livros->find($home->destaque_3);
        }

        $msg = session('msg', '');

        $dennied = false;

        return view('backoffice.destaques', ['livros' => $livros, 'home' => $home, 'books' => $books, 'dennied' => $dennied, 'msg' => $msg]);
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

        var_dump($id);
        $msg = session('msg', '');

        $home = Home::find(1);
        $livros = Livro::all();

        $dennied = false;

        return view('backoffice.destaques_edit', ['id' => $id, 'livros' => $livros, 'home' => $home, 'dennied' => $dennied, 'msg' => $msg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        var_dump($id);
        
        $home = Home::find(1);
        $home->{'destaque_'.$id} = $request->get('id_livro');
        $home->{'observacao_'.$id} = $request->get('observacao');

        $home->save();

        $msg = 'Dados alterados com sucesso!';

        return redirect()->route('destaques.edit', ['destaque' => $id])->with('msg', $msg);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
