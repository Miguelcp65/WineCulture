<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class WPPostmeta extends Model
{
    protected $connection = 'wordpress_db';   
    protected $table = 'postmeta';
    protected $primaryKey = 'meta_id';
}
