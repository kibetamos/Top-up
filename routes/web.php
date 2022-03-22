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
//$verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE'];

//$verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE'];
$router->get('/books', 'BookControler@index');

$router->get('/books/{id}', 'BookControler@show');

$router->post('/books/create', 'BookControler@store');

$router->put('/books/update/{id}', 'BookControler@update');

$router->delete('/books/delete/{id}', 'BookControler@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
