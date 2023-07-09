<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabecalho extends Model
{
    use HasFactory;

    protected $fillable = ['imagem', 'imagem_mobile', 'titulo', 'texto', 'tag', 'saber_mais'];
    

}
