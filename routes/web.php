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
$router->get('/post', ['as'=>'post', function () use ($router) {
    return view('post');
}]);

$router->get('/connexion', ['as'=>'connexion', function () use ($router) {
    return view('connexion');
}]);

$router->get('/inscription', ['as'=>'inscription', function () use ($router) {
    return view('inscription');
}]);

$router->post('/inscription', 'AuthController@inscription');


$router->post('/connexion', ['uses'=>'AuthController@loginAction', 'as'=>'login']);
$router->get('/logout', ['uses'=>'AuthController@disconnect', 'as'=>'logout']);

