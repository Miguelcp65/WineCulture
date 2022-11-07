<?php

namespace App\Models;

use App\Models\User;
use App\Models\category_wine;
use App\Models\VinhosClass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vinhos extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'id_categoria',
        'img',
        'id_produtor',
        'descricao',
        'qnt_cl',
        'perct_alco',
        'regiao',
    ];
    public function produtor(){
        return $this->belongsTo(User::class, 'id_produtor');
    }
    public function categoria(){
        return $this->belongsTo(category_wine::class, 'id_categoria');
    }
   
}
