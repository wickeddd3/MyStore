<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function store(object $request);
}
