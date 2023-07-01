<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Contacto;
use App\Models\RedeSocial;
use Illuminate\Http\Request;
use App\Models\Cabecalho;

class AutorController extends Controller
{
    

    public function index() {

        $cabecalho = Cabecalho::all();
        $contactos = Contacto::find(1);
        $redes = RedeSocial::all();
        $autor = Autor::find(1);

        return view('site.autor', ['autor' => $autor, 'cabecalho' => $cabecalho, 'contactos' => $contactos, 'redes' => $redes]);
    }
}
