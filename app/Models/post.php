<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $fillable = [

        'nombre',
        'correo',
        'titulo',
        'categoria',
        'etiquetas',
        'detalles',
        'file',
        'like',
        'comentarios'

    ];
}
