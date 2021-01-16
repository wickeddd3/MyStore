<?php

namespace App\Repositories;

use App\Interfaces\BrandRepositoryInterface;
use App\Models\Brand;

class BrandRepository implements BrandRepositoryInterface
{
    protected $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        return $this->brand->paginate(10);
    }

    public function store($request)
    {
        $this->brand->create($request);
    }

    public function update()
    {

    }
}
