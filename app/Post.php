<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'slug', 'title', 'content', 'publish_at'
    ];
}