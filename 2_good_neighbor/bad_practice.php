<?php

class PersonUtils
{
    public static function parsePersonName($format, $val)
    {
        if (strpos(",", $val) > 0) {
            $person = new Person();
            $parts = explode($val);
            $person->setGivenName($parts[1]);
            $person->setFamilyName($parts[0]);
        }

        return $person;
    }
}