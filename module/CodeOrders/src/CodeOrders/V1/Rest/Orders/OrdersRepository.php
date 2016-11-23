<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\Paginator\Adapter\ArrayAdapter;

class OrdersRepository
{
    private $tableGateway;
    private $orderItemTableGateway;

    public function __construct(AbstractTableGateway $tableGateway,
                                AbstractTableGateway $orderItemTableGateway)
    {
        $this->tableGateway          = $tableGateway;
        $this->orderItemTableGateway = $orderItemTableGateway;
    }

    public function findAll()
    {
        $hydrator = new ClassMethods();
        $hydrator->addStrategy('items',
            new OrderItemHydratorStrategy(new ClassMethods()));
        $orders   = $this->tableGateway->select();
        $res      = [];

        foreach ($orders as $order) {
            $items = $this->orderItemTableGateway->select(['order_id' => $order->getId()]);
            foreach ($items as $item) {
                $order->addItem($item);
            }
            $data  = $hydrator->extract($order);
            $res[] = $data;
        }
        $arrayAdapter     = new ArrayAdapter($res);
        $ordersCollection = new OrdersCollection($arrayAdapter);

        return $ordersCollection;
    }

    public function insert(array $orderData)
    {
        $this->tableGateway->insert($orderData);
        $id = $this->tableGateway->getLastInsertValue();

        return $id;
    }

    public function insertItem(array $item)
    {
        $this->orderItemTableGateway->insert($item);
        return $this->tableGateway->getLastInsertValue();
    }

    public function getTableGateway()
    {
        return $this->tableGateway;
    }
}