<?php
// app/UseCases/CreateContact/DTOs/CreateContactResponseModel.php
namespace App\UseCases\CreateContact\DTOs;

final class CreateContactResponseModel
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $email
    ) {
    }
}