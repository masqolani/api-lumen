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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->post('tes_controller', ['uses' => 'TesController@index', 'middleware' => 'tes']);
$router->post('store', ['uses' => 'ApiController@storeTask']);
$router->post('validation', ['uses' => 'ValidationController@validation']);
$router->post('encrypt', ['uses' => 'ValidationController@encrypt']);