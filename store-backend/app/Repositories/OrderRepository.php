<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function store($request)
    {
        $this->order->create($request);
    }
}
