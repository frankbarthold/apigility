<?php

namespace CodeOrders\V1\Rest\Orders;

class OrdersEntity
{
    protected $id;
    protected $clients_id;
    protected $user_id;
    protected $ptypes_id;
    protected $total;
    protected $status;
    protected $created_at;
    protected $items;
    
    function getId()
    {
        return $this->id;
    }

    function getClientsId()
    {
        return $this->clients_id;
    }

    function getUserId()
    {
        return $this->user_id;
    }

    function getPtypesId()
    {
        return $this->ptypes_id;
    }

    function getTotal()
    {
        return $this->total;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getCreatedAt()
    {
        return $this->created_at;
    }

    function getItems()
    {
        return $this->items;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setClientsId($clients_id)
    {
        $this->clients_id = $clients_id;
        return $this;
    }

    function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    function setPtypesId($ptypes_id)
    {
        $this->ptypes_id = $ptypes_id;
        return $this;
    }

    function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    function addItem($item)
    {
        $this->items[] = $item;
        return $this;
    }

}