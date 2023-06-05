<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

use Dragon2517\Future\Person\Notebook;


$Username = "Vagg";
$Company = null;
$Phone = 31231313;
$Email = "qwerty@ya";



$Notebook = new Notebook($Username, $Phone, $Email);

// print_r($Notebook->getUsernam());
// print_r($Notebook->getPhone());
// print_r($Notebook->getEmail());
