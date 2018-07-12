<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
    public function __construct()
    {
    }

    public function create($request)
    {
        $post = new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->user_id= auth()->id();
        $post->save();

    }

    public function getAll()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4)->all();
        return $posts;
    }

    public function getOnePost($id){
        // get one post
        return Post::find($id);
    }

}