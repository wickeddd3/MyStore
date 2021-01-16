<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;

        // $this->middleware(['auth']);
    }

    public function index()
    {
        // return $this->categoryRepository->index();
        return view('pages.categories.index');
    }

    public function create()
    {

    }

    public function store(CategoryStoreRequest $request)
    {
        $this->categoryRepository->store($request);
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
