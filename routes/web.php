<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImprensaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LoginController;
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
    Route::get('/logoff', [HomeController::class, 'index'])->name('backoffice.logoff');
    Route::get('/caroussel', [HomeController::class, 'index'])->name('backoffice.caroussel');
    Route::get('/home', [HomeController::class, 'index'])->name('backoffice.home');
    Route::get('/autor', [HomeController::class, 'index'])->name('backoffice.autor');
    Route::get('/livros', [HomeController::class, 'index'])->name('backoffice.livros');
    Route::get('/destaques', [HomeController::class, 'index'])->name('backoffice.destaques');
    Route::get('/imprensa', [HomeController::class, 'index'])->name('backoffice.imprensa');
    Route::get('/contactos', [HomeController::class, 'index'])->name('backoffice.contactos');
    Route::get('/redes', [HomeController::class, 'index'])->name('backoffice.redes');
    Route::get('/configuracoes', [HomeController::class, 'index'])->name('backoffice.configuracoes');

});