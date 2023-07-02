<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Contacto;
use App\Models\Livro;
use App\Models\RedeSocial;
use App\Models\Cabecalho;

class AutorController extends Controller
{
    

    public function index() {

        $cabecalho = Cabecalho::all();
        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $livros = Livro::all();
        $autor = Autor::find(1);

        return view('site.autor', ['autor' => $autor, 'cabecalho' => $cabecalho, 'contactos' => $contactos, 'redes' => $redes, 'livros' => $livros]);
    }
}
