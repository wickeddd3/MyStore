<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function index();

    public function store(object $request);

    public function update();
}
