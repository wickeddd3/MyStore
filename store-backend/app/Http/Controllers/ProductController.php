<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;

        // $this->middleware(['auth']);
    }

    public function index()
    {
        // return $this->productRepository->index();
        return view('pages.products.index');
    }

    public function create()
    {

    }

    public function store(ProductStoreRequest $request)
    {
        return $this->productRepository->store($request);
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
