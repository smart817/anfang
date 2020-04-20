<?php

$api = app('Dingo\Api\Routing\Router');

// $api->version('v1', ['namespace' => 'App\Http\Controllers\api'], function ($api) {
//     $api->get('aaa', function () {
//         return 'sdfsdfsdfdddd';
//     });
// });
$api->version('v1', ['namespace' => 'App\Http\Controllers\api'], function ($api) {
    $api->get('aaa', function () {
        return 'sdfsdfsdfdddd';
    });
    $api->get('content', 'AnfangContengController@index');
    $api->post('store', 'TimuController@store');
});
