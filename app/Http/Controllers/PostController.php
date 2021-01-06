<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use App\Models\User;

class PostController extends Controller
{
    // Post
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

    public function updatePost($id)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = Posts::find($id);
        if ($post->users_id == $userId->id || $userId->grade_id > 1) {
            $post->content = request('content');
            //$post->spotify_id = 1;
            $post->save();
        }
        return redirect(route('home'));
    }

    public function updatePostForm($id)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = Posts::find($id);
        if ($post->users_id == $userId->id || $userId->grade_id > 1) {
            $post = Posts::with('users', 'comments', 'comments.users')->find($id);
            return view('addPost', ['post' => $post]);
        } else {
            return redirect(route('home'));
        }
    }

    public function deletePost($id)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = Posts::find($id);
        if ($post->users_id == $userId->id || $userId->grade_id > 1) {
            $post->delete();
        }

        return redirect(route('home'));
    }

    public function listPostUpdate($id)
    {

        $post = Posts::with('users', 'comments', 'comments.users')->find($id);
        return view('post', ['post' => $post]);
    }

    // Comment
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

    public function deleteComment($id, $id_com)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $comment = Comments::find($id_com);
        if ($comment->users_id == $userId->id || $userId->grade_id > 1) {
            $comment->delete();
        }
        return redirect(route('post', ['id' => $id]));
    }

    public function updateCommentForm($id, $id_com)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $post = Posts::with('users', 'comments', 'comments.users')->find($id);
        $commentEdit = Comments::with('users', 'Posts', 'Posts.Users')->find($id_com);
        //dd($commentEdit);
        
        // $commentEdit = Comments::find($id_com);
        if ($commentEdit->users_id == $userId->id || $userId->grade_id > 1) {
            return view('post', ['post' => $post,'edit' => 1, 'commentEdit' => $commentEdit]);
        } else {
            return redirect(route('post', ['id' => $id]));
        }
    }

    public function updateComment($id, $id_com)
    {
        $userId = User::where('username', $_SESSION['user']['username'])->first();

        $comment = Comments::find($id_com);
        $post = Posts::with('users', 'comments', 'comments.users')->find($id);
        if ($comment->users_id == $userId->id || $userId->grade_id > 1) {
            $comment->content = request('comment');
            //$post->spotify_id = 1;
            $comment->save();
        }
        return redirect(route('post', ['id' => $id]));
    }
}
