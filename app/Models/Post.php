<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'author', 'content', 'post_date'];

    public function post()
    {
        return $this->belongsTo(Type::class);
    }
}
