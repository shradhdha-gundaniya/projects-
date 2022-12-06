<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function blogPosts(){
        return $this->belongsToMany(BlogPost::class,'blog_post_tag','blog_post_id','tag_id')->withTimestamps()->as('tagged'); 
    }

}
