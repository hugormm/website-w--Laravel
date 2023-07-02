<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImprensaController;
use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/contactos', [ContactosController::class, 'index'])->name('site.contactos');
Route::get('/autor', [AutorController::class, 'index'])->name('site.autor');
Route::get('/imprensa', [ImprensaController::class, 'index'])->name('site.imprensa');
Route::get('/livros/{livro_id}', [LivrosController::class, 'index'])->name('site.livros');
