<?php

interface PersonInterface
{
    public function getPerson($givenName, $familyName);
}

class DBPersonProvider implements PersonInterface
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

class PersonFactory
{
    public static function createProvider($type)
    {
        switch ($type) {
            case 'database':
                return new DBPersonProvider();
                break;
            default:
                return new NullProvider();
        }
    }
}

$config = 'database';
$provider = PersonFactory::createProvider($config);
$person = $provider->getPerson("John", "Doe");

echo ($person->getPrefix());
echo ($person->getGivenName());