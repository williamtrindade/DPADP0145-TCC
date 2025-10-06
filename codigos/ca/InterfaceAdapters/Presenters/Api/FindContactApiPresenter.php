<?php

namespace App\InterfaceAdapters\Presenters\Api;

use App\InterfaceAdapters\ViewModels\ContactViewModel;
use App\UseCases\FindContact\Boundaries\FindContactOutputBoundary;
use App\UseCases\FindContact\DTOs\FindContactResponseModel;

class FindContactApiPresenter implements FindContactOutputBoundary
{
    private ContactViewModel $viewModel;

    public function present(FindContactResponseModel $responseModel): void
    {
        $this->viewModel = new ContactViewModel(
            id: $responseModel->id,
            name: $responseModel->name,
            phoneNumber: $responseModel->phoneNumber,
            email: $responseModel->email
        );
    }

    public function getViewModel(): ContactViewModel
    {
        return $this->viewModel;
    }
}
