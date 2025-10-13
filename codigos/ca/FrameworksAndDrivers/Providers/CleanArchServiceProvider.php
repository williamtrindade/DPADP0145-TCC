<?php

namespace App\FrameworksAndDrivers\Providers;

use Illuminate\Support\ServiceProvider;

class CleanArchServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Repository Connection (Data Adapter)
        $this->app->bind(
            \App\UseCases\Contracts\ContactRepositoryInterface::class,
            \App\InterfaceAdapters\Repositories\ContactRepository::class
        );

        // Use Case Linking (Interactors)
        $this->app->bind(
            \App\UseCases\CreateContact\Boundaries\CreateContactInputBoundary::class,
            \App\UseCases\CreateContact\CreateContactInteractor::class
        );
        $this->app->bind(
            \App\UseCases\DeleteContact\Boundaries\DeleteContactInputBoundary::class,
            \App\UseCases\DeleteContact\DeleteContactInteractor::class
        );
        $this->app->bind(
            \App\UseCases\FindContact\Boundaries\FindContactInputBoundary::class,
            \App\UseCases\FindContact\FindContactInteractor::class
        );
        $this->app->bind(
            \App\UseCases\ListContacts\Boundaries\ListContactsInputBoundary::class,
            \App\UseCases\ListContacts\ListContactsInteractor::class
        );
        $this->app->bind(
            \App\UseCases\UpdateContact\Boundaries\UpdateContactInputBoundary::class,
            \App\UseCases\UpdateContact\UpdateContactInteractor::class
        );
    }
}

