<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabecalho extends Model
{
    use HasFactory;

    public function getImagemAttribute($value) {
    // Remover o prefixo "/livros" da URL da imagem
    $imagem = str_replace('/livros/', '', $value);

    return $imagem;
    }

}
