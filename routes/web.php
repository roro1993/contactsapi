<?php

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
    return $router->app->version();
});

$router->get('/contacts', 'ContactsController@index');

$router->get('/contacts/{cid}', 'ContactsController@viewContact');

$router->post('/contacts', 'ContactsController@saveContact');

$router->post('/contacts/update/{cid}', 'ContactsController@updateContact');

$router->post('/contacts/delete/{cid}', 'ContactsController@deleteContact');