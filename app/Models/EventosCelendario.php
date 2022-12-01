<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventosCelendario extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'inicio',
        'fim',
        'nome',
        'descricao'
    ];
}
