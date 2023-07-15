<?php

namespace App\Http\Controllers;

use App\Models\Cabecalho;
use App\Models\Contacto;
use App\Models\Imprensa;
use App\Models\Livro;
use App\Models\RedeSocial;


class ImprensaController extends Controller
{
    public function index() {

        $cabecalho = Cabecalho::all();
        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $livros = Livro::all();
        $imprensa = Imprensa::Paginate(2);
        
        return view('site.imprensa', [
            'contactos' => $contactos, 
            'cabecalho' => $cabecalho, 
            'redes' => $redes, 
            'imprensa' => $imprensa, 
            'livros' => $livros
        ]);
    }
}
