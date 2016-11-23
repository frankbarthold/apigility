<?php

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Hydrator\ObjectProperty;
use Zend\Paginator\Adapter\DbTableGateway;

class UsersRepository
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
//        return $this->tableGateway->select();
        $tableGateway     = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);

        return new UsersCollection($paginatorAdapter);
    }

    public function find($id)
    {

        $resultSet = $this->tableGateway->select(['id' => (int) $id]);

        return $resultSet->current();
    }

    public function findByUsername($username)
    {

        $resultSet = $this->tableGateway->select(['username' => $username]);

        return $resultSet->current();
    }

    public function insert($data)
    {
        $set = (new ObjectProperty())->extract($data);
        return $this->tableGateway->insert($set);
    }

    public function update($id, $data)
    {
        $set = (new ObjectProperty())->extract($data);
        return $this->tableGateway->update($set, array("id" => $id));
    }

    public function delete($id)
    {
        return $this->tableGateway->delete(array("id" => $id));
    }
}