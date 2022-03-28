<?php
use Illuminate\Http\Requests;

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
// $router->get('/books', 'BookController@getAPI');

$router->get('/', 'BookController@index');

$router->get('/books', 'BookController@index');

$router->get('/books/{id}', 'BookController@show');

$router->post('/books/create', 'BookController@store');

$router->put('/books/update/{id}', 'BookController@update');

$router->delete('/books/delete/{id}', 'BookController@destroy');


$router->get('/comments', 'CommentController@index');

$router->get('/comments/{id}', 'CommentController@show');

$router->post('/comments/create', 'CommentController@store');

$router->put('/comments/update/{id}', 'CommentController@update');

$router->delete('/comments/delete/{id}', 'CommentController@destroy');


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
