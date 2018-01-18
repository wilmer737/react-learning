<?php

class Person
{
    private $prefix;
    private $givenName;
    private $familyName;
    private $suffix;

    public function setPrefix($prefix)
    {
        $this->prefix = prefix;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }
}

$person = new Person();
$person->setSuffix("Mr.");
$person->getGivenName("Steve");

echo ($person->getPrefix());
echo ($person->getGivenName());