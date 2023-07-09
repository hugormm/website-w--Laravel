<?php

use App\Http\Controllers\AutorBackofficeController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CarousselBackofficeController;
use App\Http\Controllers\ConfigBackofficeController;
use App\Http\Controllers\ContactosBackofficeController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\DestaquesBackofficeController;
use App\Http\Controllers\HomeBackofficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImprensaBackofficeController;
use App\Http\Controllers\ImprensaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LivrosBackofficeController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RedesBackofficeController;
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
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao', 'log.acesso')->prefix('/backoffice')->group(function(){
    Route::get('/inicio', [InicioController::class, 'index'])->name('backoffice.inicio');
    Route::get('/logoff', [LoginController::class, 'sair'])->name('backoffice.logoff');
    Route::resource('home', HomeBackofficeController::class);
    Route::resource('autor', AutorBackofficeController::class);
    Route::resource('redes', RedesBackofficeController::class);
    Route::resource('contactos', ContactosBackofficeController::class);
    Route::resource('caroussel', CarousselBackofficeController::class);
    Route::resource('livros', LivrosBackofficeController::class);
    Route::resource('imprensa', ImprensaBackofficeController::class);
    Route::resource('configuracoes', ConfigBackofficeController::class);
    Route::resource('destaques', DestaquesBackofficeController::class);

});