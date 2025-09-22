<?php
// app/UseCases/CreateContact/DTOs/CreateContactRequestModel.php
namespace App\UseCases\CreateContact\DTOs;

final class CreateContactRequestModel
{
    public function __construct(
        public readonly string $name,
        public readonly string $phoneNumber,
        public readonly string $email
    ) {
    }
}