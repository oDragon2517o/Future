<?php

namespace Dragon2517\Future\Person;

class Notebook
{
    // private string $Username;
    // private string $Company;
    // private int $Phone;
    // private string $Email;
    // private string $DateOfBirth;
    // private string $Photo;

    public function __construct(
        private string $Username,
        private int $Phone,
        private string $Email,
        private ?string $Company = null,
        private ?string $DateOfBirth = null,
        private ?string $Photo = null
    ) {
        $this->Username = $Username;
        $this->Company = $Company;
        $this->Phone = $Phone;
        $this->Email = $Email;
        $this->DateOfBirth = $DateOfBirth;
        $this->Photo = $Photo;
    }

    public function getUsernam()
    {
        return $this->Username;
    }

    public function getCompany()
    {
        return $this->Company;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }

    public function getPhoto()
    {
        return $this->Photo;
    }
}
