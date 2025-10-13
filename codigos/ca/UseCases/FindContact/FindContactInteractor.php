<?php

namespace App\UseCases\FindContact;

use App\UseCases\Contracts\ContactRepositoryInterface;
use App\UseCases\Exceptions\ResourceNotFoundException;
use App\UseCases\FindContact\Boundaries\FindContactInputBoundary;
use App\UseCases\FindContact\Boundaries\FindContactOutputBoundary;
use App\UseCases\FindContact\DTOs\FindContactResponseModel;

final readonly class FindContactInteractor implements FindContactInputBoundary
{
    public function __construct(private ContactRepositoryInterface $contactRepository)
    {
    }

    /**
     * @throws ResourceNotFoundException
     */
    public function find(int $id, FindContactOutputBoundary $presenter): void
    {
        $contact = $this->contactRepository->findById($id);

        if (!$contact) {
            throw new ResourceNotFoundException('Contato nao encontrado.');
        }

        $responseModel = new FindContactResponseModel(
            id:          $contact->getId(),
            name:        $contact->getName(),
            phoneNumber: $contact->getPhoneNumber(),
            email:       $contact->getEmail()
        );

        $presenter->present($responseModel);
    }
}
