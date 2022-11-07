<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_wine extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function receitas() {
        return $this->hasMany(Receitas::class, 'id_categoria');
    }
}
