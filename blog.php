<?php
// Файл для создание/пересоздания БД


if (file_exists('blog.sqlite')) {
    unlink('blog.sqlite');
}


$pdo = new PDO('sqlite:blog.sqlite');



$pdo->exec(
    'CREATE TABLE users (
    Id INTEGER PRIMARY KEY AUTOINCREMENT ,
    Username TEXT,
    Company TEXT,
    Phone INT  NOT NULL,
    Email  TEXT NOT NULL,
    Date_of_birth TEXT,
    Photo TEXT
    )'
);

$pdo->exec(
    "INSERT INTO users (Username, Company, Phone, Email, Date_of_birth, Photo)
    VALUES ('Gaz', 'MMM', 89000000, 'mkail@ya', 000000, 'no')"
);

$pdo->exec(
    "INSERT INTO users (Username, Company, Phone, Email, Date_of_birth, Photo)
    VALUES ('Gaz2', 'MMDMS', 890000002, 'sudo@linux', 121212, 'yes')"
);
