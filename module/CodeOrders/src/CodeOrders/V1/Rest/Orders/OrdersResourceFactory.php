<?php

namespace CodeOrders\V1\Rest\Orders;

class OrdersResourceFactory
{

    public function __invoke($services)
    {
        $ordersRepository = $services->get('CodeOrders\\V1\\Rest\\Orders\\OrdersRepository');
        $orderService     = $services->get('CodeOrders\\V1\\Rest\\Orders\\OrderService');
        return new OrdersResource($ordersRepository, $orderService);
    }
}