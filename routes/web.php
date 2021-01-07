<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ['uses'=>'PostController@listAll', 'as'=>'home']);
$router->get('/deletePost/{id}', ['uses'=>'PostController@deletePost', 'as'=>'deletePost']);
$router->get('/deleteComment/{id}/{id_com}', ['uses'=>'PostController@deleteComment', 'as'=>'deleteComment']);
$router->get('/post/{id}', ['uses'=>'PostController@listPost', 'as'=>'post']);
$router->post('/post/{id}', ['uses'=>'PostController@addComment', 'as'=>'addComment']);

$router->post('/addPost', ['uses'=>'PostController@addPost', 'as'=>'addPostForm']);
$router->get('/post/{id}', ['uses'=>'PostController@listPost', 'as'=>'post']);
$router->get('/updatePostForm/{id}', ['uses'=>'PostController@updatePostForm', 'as'=>'updatePostForm']);
$router->post('/updatePost/{id}', ['uses'=>'PostController@updatePost', 'as'=>'updatePost']);

$router->get('/updateCommentForm/{id}/{id_com}', ['uses'=>'PostController@updateCommentForm', 'as'=>'updateCommentForm']);
$router->post('/updateComment/{id}/{id_com}', ['uses'=>'PostController@updateComment', 'as'=>'updateComment']);


$router->post('/inscription', ['uses'=>'AuthController@inscription', 'as'=>'register']);
$router->post('/connexion', ['uses'=>'AuthController@loginAction', 'as'=>'login']);
$router->get('/logout', ['uses'=>'AuthController@disconnect', 'as'=>'logout']);
$router->post('/delete', ['uses'=>'AuthController@delete', 'as'=>'delete']);

$router->get('/manageUsers', ['uses'=>'userController@listAllUsers', 'as'=>'manageUsers']);
$router->get('/deleteUser/{id}', ['uses'=>'UserController@deleteUser', 'as'=>'deleteUser']);
$router->get('/deleteUserB/{id}', ['uses'=>'UserController@deleteUserB', 'as'=>'deleteUserB']);

$router->get('/addPost', ['as'=>'addPost', function () {
    return view('addPost');
}]);

$router->get('/profile', ['as'=>'profile', function () {
    return view('profile');
}]);


$router->get('/connexion', ['as'=>'connexion', function () use ($router) {
    return view('connexion');
}]);

$router->get('/inscription', ['as'=>'inscription', function () use ($router) {
    return view('inscription');
}]);

