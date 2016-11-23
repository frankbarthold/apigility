<?php

namespace CodeOrders\V1\Rest\Users;

class UsersEntity
{
    protected $id;
    protected $username;
    protected $password;
    protected $firstname;
    protected $lastname;
    protected $role;

    function getId()
    {
        return $this->id;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getFirstname()
    {
        return $this->firstname;
    }

    function getLastname()
    {
        return $this->lastname;
    }

    function getRole()
    {
        return $this->role;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    function setRole($role)
    {
        $this->role = $role;
        return $this;
    }


}