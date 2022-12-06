<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content',];

    public function tags()
    {
       return $this->belongsToMany(Tag::class,'blog_post_tag','blog_post_id','tag_id')->withTimestamps(); 
    }

}

   
