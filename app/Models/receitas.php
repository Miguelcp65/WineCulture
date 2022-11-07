<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\category_wine;

class receitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'foto',
        'tipovinho',
        'descricao',
        'ingre',
        'preparo',
        'id_categoria'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function categoria() {
        return $this->belongsTo(category_wine::class, 'id_categoria');
    }
}
