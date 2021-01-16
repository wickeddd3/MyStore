<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->paginate(10);
    }

    public function store($request)
    {
        $this->category->create([
            'name' => $request['name'],
            'slug' => $request['slug']
        ]);
    }

    public function update()
    {

    }
}
