<?php

interface UserInterface
{
    function getName();
}

class User implements UserInterface
{
    public function __construct($id) {}

    public function getName()
    {
        return "Shalini";
    }
}

class UserFactory
{
    public static function create($id)
    {
        return new User($id);
    }
}

$user = UserFactory::create(1);
echo($user->getName()."\n");