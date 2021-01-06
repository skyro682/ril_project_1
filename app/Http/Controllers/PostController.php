<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use App\Models\User;

class PostController extends Controller
{

    public function listAll()
    {

        $posts = Posts::with('users')->orderBy('created_at', 'DESC')->simplePaginate(3);
        return view('home', ['posts' => $posts]);
    }

    public function listPost($id)
    {

        $post = Posts::with('users', 'comments', 'comments.users')->find($id);
        return view('post', ['post' => $post]);
    }

    public function addComment($id)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $comments = new Comments;
        $comments->content = request('comment');
        $comments->posts_id = $id;
        $comments->users_id = $userId->id;
        $comments->save();

        return redirect(route('post', ['id' => $id]));
    }

    public function addPost()
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = new Posts();
        $post->content = request('content');
        $post->users_id = $userId->id;
        $post->spotify_id = 1;
        $post->save();

        return redirect(route('home'));
    }

    public function deletePost($id)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = Posts::find($id);
        if ($post->users_id == $userId->id) {
            $post->delete();
        }

        return redirect(route('home'));
    }
}
