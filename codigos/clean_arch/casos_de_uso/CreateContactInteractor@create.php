<?php

public function create(CreateContactRequestModel $requestModel): CreateContactResponseModel
    {
        // 1. Verifica se o contato ja existe (regra da aplicacao)
        if ($this->contactRepository->existsByEmail($requestModel->email)) {
            throw new InvalidArgumentException('O e-mail informado ja esta em uso.');
        }

        // 2. Cria a entidade, que valida as regras de negocio intrinsecas
        $contact = new Contact(
            id: null,
            name: $requestModel->name,
            phoneNumber: $requestModel->phoneNumber,
            email: $requestModel->email
        );

        // 3. Persiste a entidade atraves da interface do repositorio
        $savedContact = $this->contactRepository->save($contact);

        // 4. Prepara o DTO de resposta
        $responseModel = new CreateContactResponseModel(
            id: $savedContact->getId(),
            name: $savedContact->getName(),
            email: $savedContact->getEmail()
        );

        // 5. Entrega o DTO de resposta para o Presenter atraves da interface de saida
        return $this->presenter->present($responseModel);
    }