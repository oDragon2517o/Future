<?php
// Файл для создание/пересоздания БД


if (file_exists('blog.sqlite')) {
    unlink('blog.sqlite');
}


$pdo = new PDO('sqlite:blog.sqlite');



$pdo->exec(
    'CREATE TABLE users (
    Id INT PRIMARY KEY,
    Username TEXT,
    Company TEXT,
    Phone INT  NOT NULL,
    Email  TEXT NOT NULL,
    Date_of_birth TEXT,
    Photo TEXT
    )'
);
