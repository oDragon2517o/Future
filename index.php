<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dragon2517\Future\Http\Request;
use Dragon2517\Future\Person\SqlNotebook;
// use PDO;


$request = new Request($_GET, $_SERVER, file_get_contents('php://input'),);

$connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');

$postsRepository = new SqlNotebook($connection);

$User = $postsRepository->get();

var_dump($User->fetch(PDO::FETCH_ASSOC));
var_dump($User->fetch(PDO::FETCH_ASSOC));

// print_r($request->path());


// $routes = [
//     'GET' => [
//         '/api/v1/notebook/' => FindByUsername::class,
//         '/api/v1/notebook/' => FindByUsername::class,
//     ],
//     'POST' => [
//         '/api/v1/notebook/' => LogIn::class,
//         '/api/v1/notebook/' => LogIn::class,

//     ],
//     'DELETE' => [
//         '/api/v1/notebook/' => DeletePost::class,
//     ],

// ];



// print_r($_SERVER);
