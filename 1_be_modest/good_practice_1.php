<?php

class Person
{
    private $personName = array();

    public function setPrefix($prefix)
    {
        $this->personName['prefix'] = $prefix;
    }

    public function getPrefix()
    {
        return $this->personName['prefix'];
    }

    public function setGivenName($givenName)
    {
        $this->personName['givenName'] = $givenName;
    }

    public function getGivenName()
    {
        return $this->personName['givenName'];
    }

    public function setFamilyName($familyName)
    {
        $this->personName['familyName'] = $familyName;
    }

    public function getFamilyName()
    {
        return $this->personName['familyName'];
    }

    public function setSuffix($suffix)
    {
        $this->personName['suffix'] = $suffix;
    }

    public function getSuffix()
    {
        return $this->personName['suffix'];
    }
}

$person = new Person();
$person->setSuffix("Mr.");
$person->getGivenName("Ben");

echo ($person->getPrefix());
echo ($person->getGivenName());