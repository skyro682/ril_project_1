<?php

namespace App\Http\Controllers;
use  App\Models\Comments;
class AddCommentController extends Controller
{
    public function Add_Comment()
    {
        $Comments = new Comments;
        $Comments->content = request('comment');
        $Comments->posts_id = 1;
        $Comments->save();
    }

    //
}
