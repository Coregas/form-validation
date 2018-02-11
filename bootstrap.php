<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/container.php';

use Szenis\Routing\Router;


$router = new Router();
$router->get('/{n:date}-{w:item}', function($date, $item) {
    return 'hello world';
});


$router->add('/', 'GET', '\Emotion\Controllers\Index::mainAction');
$router->add('/sss', 'GET', '\Emotion\Controllers\Index::mainAction');


$response = $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
dump($response);

switch ($response['code']) {
    case \Szenis\Routing\Route::STATUS_NOT_FOUND:
        echo file_get_contents('404.php');
        break;

    case \Szenis\Routing\Route::STATUS_FOUND:
        echo call_user_func_array($response['handler'], $response['arguments']);

        break;
}