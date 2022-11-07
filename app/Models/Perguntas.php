<?php

namespace App\Models;

use App\Models\CategoriaPergunta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perguntas extends Model
{
    protected $fillable = [
        'pergunta',
        'resposta',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaPergunta::class, 'categoria_id');
    }
}
