<?php

interface Observer
{
    function onChanged($sender, $args);
}

interface Observable
{
    function addObserver($observer);
}

class UserList implements Observable
{
    private $_observers = array();

    public function addCustomer($name)
    {
        foreach ($this->_observers as $observer) {
            $observer->onChanged($this, $name);
        }
    }

    public function addObserver($observer)
    {
        $this->_observers[] = $observer;
    }
}

class UserListLogger implements Observer
{
    public function onChanged($sender, $args)
    {
        echo ("'$args' added to user list\n");
    }
}

$ul = new UserList();
$ul->addObserver(new UserListLogger());
$ul->addCustomer("Cooper");