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
$router->get('/post/{id}', ['uses'=>'PostController@listPost', 'as'=>'post']);
$router->post('/post/{id}', ['uses'=>'PostController@addComment', 'as'=>'addComment']);
$router->post('/addPost', ['uses'=>'PostController@addPost', 'as'=>'addPostForm']);

$router->get('/addPost', ['as'=>'addPost', function () {
    return view('addPost');
}]);
