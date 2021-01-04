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

$router->get('/', function () use ($router) {
    return view('home');
});
$router->get('/home', ['as'=>'home', function () use ($router) {
    return view('home');
}]);
$router->get('/post', ['as'=>'post', function () use ($router) {
    return view('post');
}]);
$router->get('/addPost', ['as'=>'addPost', function () use ($router) {
    return view('addPost');
}]);
$router->post('/post', ['uses'=>'AddCommentController@Add_Comment', 'as'=>'Add_Comment']); //Target class [App\Http\Controllers\AuthController] does not exist.