<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Hydrator\ClassMethods;
use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;

class OrderItemHydratorStrategy implements StrategyInterface
{
    private $hydrator;

    public function __construct(ClassMethods $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    public function extract($items)
    {
        $data = [];
        
        foreach($items as $item){
            $data[] = $this->hydrator->extract($item);
        }
        return $data;
    }

    public function hydrate($value)
    {
        throw new \RuntimeException('Hydration is not support');
    }
}