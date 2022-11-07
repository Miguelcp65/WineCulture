<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vinhos;

class VinhosClass extends Model
{
    use HasFactory;
    public $table = "vinhosclass";

    protected $fillable = [
        'id_vinho',
        'nr_class',
        'classificacao',
        'total_class',
    ];
    public function vinhos() {
        return $this->belongsTo(Vinhos::class, 'id_vinho');
    }
}
