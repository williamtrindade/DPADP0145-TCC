<?php

namespace App\UseCases\UpdateContact\DTOs;

final readonly class UpdateContactRequestModel
{
    public function __construct(
        public int $id,
        public string $name,
        public string $phoneNumber,
        public string $email
    ) {
    }
}
