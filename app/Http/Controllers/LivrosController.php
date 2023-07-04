<?php

namespace App\Http\Controllers;

use App\Models\Cabecalho;
use App\Models\Contacto;
use App\Models\Livro;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index($livro_id) {

        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $livros = Livro::all();
        $livro = Livro::find($livro_id);
        $cabecalho = Cabecalho::all();
        
        return view('site.livros', [
            'contactos' => $contactos, 
            'redes' => $redes, 
            'livros' => $livros, 
            'livro' => $livro, 
            'cabecalho' => $cabecalho
        ]);
    }
}
