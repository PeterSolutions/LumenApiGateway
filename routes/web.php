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

$router->group(['middleware' => 'client.credentials'], function() use ($router) {
        /**
        * Author routes
        */
        $router->get('/authors', 'AuthorController@index');
        $router->post('/autor', ['as' => 'autor', 'uses' => 'AuthorController@create']);
        $router->get('/authors/{author}', 'AuthorController@show');
        $router->put('/authors/{author}', 'AuthorController@update');
        $router->patch('/authors/{author}', 'AuthorController@update');
        $router->delete('/authors/{author}', 'AuthorController@destroy');

        /**
        * Book routes
        */
        $router->get('/books', 'BookController@index');
        $router->post('/books', ['as' => 'addbooks', 'uses' => 'BookController@store']);
        $router->get('/books/{book}', 'BookController@show');
        $router->put('/books/{book}', 'BookController@update');
        $router->patch('/books/{book}', 'BookController@update');
        $router->delete('/books/{book}', 'BookController@destroy');
});