<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mensagens extends Model
{
    protected $fillable = [
        'mensagem',
        'id_envio',
        'id_destino'
    ];
    public function idenvio() {
        return $this->belongsTo(User::class, 'id_envio');
    }
}
