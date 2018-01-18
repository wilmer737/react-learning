<?php
abstract class Person
{
    private $givenName;
    private $familyName;

    public function setGivenName($gn)
    {
        $this->givenName = $gn;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setFamilyName($fn)
    {
        $this->familyName = $fn;
    }

    public function getFamilyName()
    {
        return $this->givenName;
    }

    public function sayHello()
    {
        echo("Hello, I am ");
        $this->introduceSelf();
    }

    abstract public function introduceSelf();
}

class Employee extends Person
{
    private $role;
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function introduceSelf()
    {
        echo ($this->getRole() . " " . $this->getGivenName() . " " . $this->getFamilyName());
    }
}