<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Cabecalho;
use App\Models\Contacto;
use App\Models\Home;
use App\Models\Livro;
use App\Models\RedeSocial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $cabecalho = Cabecalho::all();
        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $livros = Livro::all();
        $home = Home::find(1);
        $autor = Autor::find(1);

        $books = [];

        if($home->destaque_1 != 0){
            $books[] = $livros->find($home->destaque_1);
        }
        if($home->destaque_2 != 0){
            $books[] = $livros->find($home->destaque_2);
        }
        if($home->destaque_3 != 0){
            $books[] = $livros->find($home->destaque_2);
        }


        return view('site.home', ['contactos' => $contactos, 'cabecalho' => $cabecalho, 'redes' => $redes, 'home' => $home, 'livros' => $livros, 'books' => $books, 'autor' => $autor]);
    }
}
