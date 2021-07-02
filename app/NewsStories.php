<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsStories extends Model
{
    protected $table = 'stories';
    protected $fillable = ['title', 'body', 'publisher', 'published'];
    public $timestamps = false;
}
