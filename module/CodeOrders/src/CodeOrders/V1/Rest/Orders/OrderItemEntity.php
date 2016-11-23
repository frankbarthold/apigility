<?php

namespace CodeOrders\V1\Rest\Orders;

class OrderItemEntity
{
    protected $id;
    protected $order_id;
    protected $product_id;
    protected $quantity;
    protected $price;
    protected $total;

    function getId()
    {
        return $this->id;
    }

    function getOrderId()
    {
        return $this->order_id;
    }

    function getProductId()
    {
        return $this->product_id;
    }

    function getQuantity()
    {
        return $this->quantity;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getTotal()
    {
        return $this->total;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}