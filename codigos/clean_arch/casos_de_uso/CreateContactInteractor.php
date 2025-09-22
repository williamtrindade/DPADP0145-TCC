<?php
// app/UseCases/CreateContact/CreateContactInteractor.php
namespace App\UseCases\CreateContact;

use App\Entities\Contact;
/.. imports

final class CreateContactInteractor implements CreateContactInputBoundary
{
    public function __construct(
        private readonly ContactRepositoryInterface $contactRepository,
        private readonly CreateContactOutputBoundary $presenter
    ) {
    }

    // Implementacao do metodo create()
}