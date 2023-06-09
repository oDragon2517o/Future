<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dragon2517\Future\Http\Request;
use Dragon2517\Future\Person\SqlNotebook;
// use PDO;


$request = new Request($_GET, $_SERVER, file_get_contents('php://input'),);

$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');
$postsRepository = new SqlNotebook($connection);

// print_r($postsRepository->get());

$path = $request->path();
$method = $request->method();

$routes = [
    'GET' => [
        '/api/v1/notebook/' => new SqlNotebook(
            new PDO('sqlite:' . __DIR__ . '/blog.sqlite')
        ),
        '/api/v1/notebook/' => FindByUsername::class,
    ],
    'POST' => [
        '/api/v1/notebook/' => LogIn::class,
        '/api/v1/notebook/' => LogIn::class,

    ],
    'DELETE' => [
        '/api/v1/notebook/' => DeletePost::class,
    ],

];


$routes2 = [
    'GET' => [
        '/api/v1/notebook/' => 'Типо возврат всего',
        '/api/v1/notebook/' => FindByUsername::class,
    ],
    'POST' => [
        '/api/v1/notebook/' => LogIn::class,
        '/api/v1/notebook/' => LogIn::class,

    ],
    'DELETE' => [
        '/api/v1/notebook/' => DeletePost::class,
    ],

];

print_r($path);

// print_r($_SERVER);

// $actionClassName = $routes2[$method][$path];

// print_r($actionClassName);


// print_r($_SERVER);
// print_r(parse_url($_SERVER['REQUEST_URI']));
