<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResourse;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return PostResourse::collection($posts);
    }

    public function show($post)
    {
     $post = Post::find($post);

     return new PostResourse($post);
    }
}
