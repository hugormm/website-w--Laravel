<?php

namespace App\Http\Controllers;

use App\Models\LogAcesso;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index() {
        $dennied = false;

        $acesso = LogAcesso::all();
        
        $ultimo_acesso = $acesso->last()->created_at;
        
        return view('backoffice.inicio', ['dennied' => $dennied, 'ultimo_acesso' => $ultimo_acesso]);
    }
}
