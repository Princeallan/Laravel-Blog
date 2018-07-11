<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
    public function __construct()
    {
    }

    public function Create($request)
    {
        $post = new Post();


    }

    public function getAll()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4)->all();
        return $posts;
    }

}