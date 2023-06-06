<?php

// print_r(file_get_contents('php://input'));

print_r($_SERVER['REQUEST_METHOD']);
echo ("\n");


print_r($_SERVER['REQUEST_URI']);
echo ("\n");

print_r(json_decode(file_get_contents('php://input')));
echo ("\n");

print_r($_GET);
echo ("\n");

print_r($_SERVER);
