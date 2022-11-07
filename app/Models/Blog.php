<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\User;

class Blog extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'id_user',
        'id_categoria',
        'data',
        'preview',
        'descricao',
        'img',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function categoria(){
        return $this->belongsTo(Category::class, 'id_categoria');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
