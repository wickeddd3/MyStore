<?php

namespace App\Http\Controllers;

use App\Interfaces\BrandRepositoryInterface;
use App\Http\Requests\BrandStoreRequest;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;

        // $this->middleware(['auth']);
    }

    public function index()
    {
        // return $this->brandRepository->index();
        return view('pages.brands.index');
    }

    public function create()
    {

    }

    public function store(BrandStoreRequest $request)
    {
        $this->brandRepository->store($request);
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
