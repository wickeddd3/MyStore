<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;

        $this->middleware(['auth']);
    }

    public function store(OrderStoreRequest $request)
    {
        $this->orderRepository->store($request);
    }
}
