<?php

namespace App\UseCases\FindContact\Boundaries;

interface FindContactInputBoundary
{
    public function find(int $id, FindContactOutputBoundary $presenter): void;
}
