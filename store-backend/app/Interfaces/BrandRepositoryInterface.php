<?php

namespace App\Interfaces;

interface BrandRepositoryInterface
{
    public function index();

    public function store(object $request);

    public function update();
}
