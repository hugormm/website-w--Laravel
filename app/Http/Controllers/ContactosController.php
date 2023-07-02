<?php

namespace App\Http\Controllers;

use App\Models\Cabecalho;
use App\Models\Contacto;
use App\Models\Livro;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index() {

        $cabecalho = Cabecalho::all();
        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $livros = Livro::all();
        
        return view('site.contactos', ['contactos' => $contactos, 'cabecalho' => $cabecalho, 'redes' => $redes, 'livros' => $livros]);
    }
}
