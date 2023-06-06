<?php

namespace Dragon2517\Future\Person;

use PDO;

class SqlNotebook
{
    public function __construct(
        private PDO $connection
    ) {
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
}
