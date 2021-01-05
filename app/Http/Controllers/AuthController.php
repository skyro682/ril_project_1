<?php

namespace App\Http\Controllers;

use App\Traits\SessionTrait;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Http\Requests\StorePostRequest;
use  App\Models\User;

class AuthController extends Controller
{
    public function inscription(Request $request)
    {
        $user = new User;
        $user->email = request('email');
        $user->username = request('username');
        $user->name = request('name');
        $user->last_name = request('last_name');
        //$user->password = request('password');
        $user->password = hash('sha256', $request->get('password'));
        $user->grade_id = "1";
        $user->save();
        return redirect(route('connexion'));
    }

    /**
     * @param Request $request
     * @return Exception|ValidationException|View|RedirectResponse
     */
    public function loginAction(Request $request)
    {
        // Hashing password
        $hashedPassword = hash('sha256', $request->get('password'));

        // Checking if fields are correct
        try {
            $this->validate($request, [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        } catch (ValidationException $errors) {
            return view('errors', ['error' => $errors->getResponse()->getContent()]);
        }

        // Trying to authenticate user
        $user = User::getOneUserByEmail($request->get('email'));
        if (!empty($user)){

            if($user->checkAuthPassword($user, $hashedPassword)){
                SessionTrait::setSessionCookie($user->getAttributeValue('username'));
                return redirect('/');
            }
            else{
                return 'password';
            }
        }
        else{
            return 'user';
        }
    }

    /**
     * @return RedirectResponse
     */
    public function disconnect(): RedirectResponse
    {
        SessionTrait::unsetSessionCookie();
        return redirect('/');
    }
}
