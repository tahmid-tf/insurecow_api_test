<?php

use Illuminate\Http\Response;
use App\Http\Controllers\TestController;
use App\Test;

$router->group(['middleware' => 'cors'], function () use ($router) {
// example code
    $router->get('/', function () {
        return response()->json([
            "data" => Test::all(),
            "status" => Response::HTTP_ACCEPTED
        ]);
    });

    $router->post('postData', 'TestController@postData');
});
