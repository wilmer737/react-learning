<?php

class Person
{
    public $prefix;
    public $givenName;
    public $familyName;
    public $suffix;
}

$person = new Person();
$person->prefix = "Mr.";
$person->givenName = "Wilmer";

echo ($person->prefix);
echo ($person->giveName);