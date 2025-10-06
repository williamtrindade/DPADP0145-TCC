<?php

namespace App\UseCases\FindContact\DTOs;

final readonly class FindContactResponseModel
{
    public function __construct(
        public int $id,
        public string $name,
        public string $phoneNumber,
        public string $email
    ) {
    }
}
