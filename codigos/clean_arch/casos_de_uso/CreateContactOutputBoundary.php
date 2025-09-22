<?php
// app/UseCases/CreateContact/Boundaries/CreateContactOutputBoundary.php
namespace App\UseCases\CreateContact\Boundaries;

use App\UseCases\CreateContact\DTOs\CreateContactResponseModel;

interface CreateContactOutputBoundary
{
    public function present(CreateContactResponseModel $responseModel): CreateContactResponseModel;
}