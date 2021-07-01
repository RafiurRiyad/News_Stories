<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsStories extends Model
{
    protected $table = 'stories';
    protected $fillable = ['title', 'body', 'published'];
    public $timestamps = false;
}
