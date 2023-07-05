<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index() {
        $dennied = false;
        
        return view('backoffice.inicio', ['dennied' => $dennied]);
    }
}
