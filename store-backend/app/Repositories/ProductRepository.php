<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return $this->product->paginate(10);
    }

    public function store($request)
    {
        return $this->product->create($request->all());
    }

    public function update()
    {

    }
}
