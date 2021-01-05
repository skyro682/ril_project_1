<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Comments;

class PostController extends Controller
{
    
    public function listAll()
    {

        $posts = Posts::with('users')->orderBy('created_at', 'DESC')->paginate(10);
        return view('home', ['posts' => $posts]);

    }

    public function listPost($id)
    {

        $post = Posts::with('users', 'comments', 'comments.users')->find($id);
        return view('post', ['post' => $post]);

    }

    public function addComment($id)
    {
        $comments = new Comments;
        $comments->content = request('comment');
        $comments->posts_id = $id;
        $comments->users_id = 1;
        $comments->save();

        return redirect(route('post', ['id' => $id]));
    }

    public function addPost()
    {
        $post = new Posts();
        $post->content = request('content');
        $post->users_id = 1;
        $post->spotify_id = 1;
        $post->save();

        return redirect(route('home'));
    }

}
