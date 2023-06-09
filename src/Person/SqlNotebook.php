<?php

namespace Dragon2517\Future\Person;

use PDO;

class SqlNotebook
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save($notebooken): void
    {
        // Добавили поле commen в запрос
        $statement = $this->connection->prepare(
            'INSERT INTO users (Username, Company, Phone, Email, Date_of_birth, Photo)
                VALUES (:Username, :Company, :Phone, :Email, :Date_of_birth, :Photo)'
        );
        $statement->execute([
            ':Username' => $notebooken->getUsername(),
            ':Company' => $notebooken->getCompany(),
            ':Phone' => $notebooken->getPhone(),
            ':Email' => $notebooken->getEmail(),
            ':Date_of_birth' => $notebooken->getDateOfBirth(),
            ':Photo' => $notebooken->getPhoto(),
        ]);
    }

    public function get()
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM users'
        );


        $statement->execute();

        // $statement->fetch(PDO::FETCH_ASSOC);


        return $statement->fetchAll();
    }
}
