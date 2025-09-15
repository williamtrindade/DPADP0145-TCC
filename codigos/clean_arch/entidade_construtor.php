<?php

namespace App\Entities;

use InvalidArgumentException;

final class Contact
{
    private ?int $id;
    private string $name;
    private string $phoneNumber;
    private string $email;

    public function __construct(
        ?int $id, 
        string $name, 
        string $phoneNumber, 
        string $email
    ) {
        $this->id = $id;
        $this->setName($name);
        $this->setPhoneNumber($phoneNumber);
        $this->setEmail($email);
    }

    // ... Metodos Getters e Setters
}
