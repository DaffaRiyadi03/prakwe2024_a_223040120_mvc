<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    protected $fillable = ['tittle', 'author', 'slug', 'body'];
}
