<?php

// class User
// {
//     public function __construct(private string $Name, private ?string $ABC = null)
//     {
//         $this->Name = $Name;
//     }

//     public function getName()
//     {
//         print_r($this->Name);
//     }
//     public function getABC()
//     {
//         var_dump($this->ABC);
//     }
// }


// $Name = 'Vagg';

// $User = new User($Name, 'asd');
// $User->getABC();

// print_r(null);





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


$Username = "Vagg";
$Company = null;
$Phone = 31231313;
$Email = "qwerty@ya";



$Notebook = new Notebook($Username, $Phone, $Email);
