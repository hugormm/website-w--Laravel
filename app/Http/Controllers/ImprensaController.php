<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImprensaController extends Controller
{
    public function index() {
        return view('site.imprensa');
    }
}
