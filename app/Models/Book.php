<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        "title", "description", "price", "stock", "cover_photo", "genre_id", "author_id"
    ];
}