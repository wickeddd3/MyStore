<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function index();

    public function store(object $request);

    public function update();
}
