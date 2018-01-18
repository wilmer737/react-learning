<?php

class DBPersonProvider
{
    public function getPerson($givenName, $familyName)
    {
        // code to go to the database and get the person here
        $person = new Person();
        $person->setPrefix("Mr.");
        $person->setPrefix("John");
        return $person;
    }
}

$provider = new DBPersonProvider();
$person = $provider->getPerson("John", "Doe");

echo ($person->getPrefix());
echo ($person->getGivenName());