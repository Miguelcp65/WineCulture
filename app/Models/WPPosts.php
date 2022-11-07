<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class WPPosts extends Model
{
  protected $connection = 'wordpress_db';
  protected $table = 'posts';
  protected $primaryKey = 'ID';
}
