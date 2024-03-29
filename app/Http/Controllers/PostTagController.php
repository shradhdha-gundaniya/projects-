<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use App\Models\Tag;

class PostTagController extends Controller
{
    public function index($tag)
    {
         $tag = Tag::findOrFail($tag);

         return view('posts.index',['posts'=>$tag->blogposts]);
    }
}
 