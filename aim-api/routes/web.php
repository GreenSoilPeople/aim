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

$router->group(['prefix' => 'api/v1'], function($router) {
    $router->group(['prefix' => 'dealers'], function($router) {
        $router->get('/', 'DealersController@index');
        $router->post('add', 'DealersController@createDealer');
        $router->get('view/{id}', 'DealersController@viewDealer');
        $router->put('edit/{id}', 'DealersController@updateDealer');
        $router->delete('delete/{id}', 'DealersController@deleteDealer');
    });
    
    $router->group(['prefix' => 'sdds'], function($router) {
        $router->get('/', 'SddsController@index');
        $router->post('add', 'SddsController@createSdd');
        $router->get('view/{id}', 'SddsController@viewSdd');
        $router->put('edit/{id}', 'SddsController@updateSdd');
        $router->delete('delete/{id}', 'SddsController@deleteSdd');
        $router->get('qr/{id}', 'SddsController@viewQR');
    });
    
    $router->group(['prefix' => 'movements'], function($router) {
        $router->get('/', 'MovementsController@index');
        $router->post('add', 'MovementsController@createMovement');
        $router->get('view/{id}', 'MovementsController@viewMovement');
        $router->put('edit/{id}', 'MovementsController@updateMovement');
        $router->delete('delete/{id}', 'MovementsController@deleteMovement');
    });
});