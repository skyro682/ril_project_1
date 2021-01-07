<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use App\Models\User;

class UserController extends Controller
{
    // Post
    public function listAllUsers()
    {

        $users = User::orderBy('created_at', 'DESC')->simplePaginate(10);
        return view('manageUsers', ['users' => $users]);
    }


    public function deleteUser($id)
    {
        if (isset($_SESSION['user']['username'])) {
            $userId = User::where('username', $_SESSION['user']['username'])->first();
            if ($userId->grade_id == 3) {
                $user = User::find($id);
                $user->delete();
            }
        }
        return redirect(route('manageUsers'));
    }
}
