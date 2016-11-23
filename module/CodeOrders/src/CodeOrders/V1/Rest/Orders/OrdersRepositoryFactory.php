<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;


class OrdersRepositoryFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');

        $hydrator  = new HydratingResultSet(new ClassMethods(),new OrdersEntity());

        $tableGateway    = new TableGateway('orders', $dbAdapter, null,$hydrator);
        
        $orderItemTableGateway = $serviceLocator->get('CodeOrders\\V1\\Rest\\Orders\\OrderItemTableGateway');

        return new OrdersRepository($tableGateway, $orderItemTableGateway);
    }
}