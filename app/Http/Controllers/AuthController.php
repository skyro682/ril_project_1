<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StorePostRequest;

use  App\Models\User;
class AuthController extends Controller
{
 public function inscription(Request $request)
 {

    // $this->validate($request, [

    //     'email' => ['required', 'email'],
    //     'username' => ['required', 'username'],
    //     'name' => ['required', 'name'],
    //     'last_name' => ['required', 'last_name'],
    //     'password' => ['required', 'confirmed', 'min:8'],
    //     'password_confirmation' => ['required'],

    // ]);


    
    $user = new User;
    $user->email = request('email');
    $user->username = request('username');
    $user->name = request('name');
    $user->last_name = request('last_name');
    $user->password = request('password');
    $user->grade_id = "1";
    $user->save();
    return 'Votre email est ' . request('email') . ' votre nom d utilisateur est '.request('username') . ' et votre mot de passe est ' . request('password');





}

 public function traitement()
 {
     request()->validated([
         'username' => ['required', 'username'],
         'password' => ['required'],
     ]);
 
     // À faire : vérification que l'email et le mot de passe sont corrects.
 
    //  return 'Traitement formulaire connexion';
 }




}