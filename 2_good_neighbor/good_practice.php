<?php

class InvalidPersonNameFormatException extends LogicException {}

class PersonUtils
{
    public static function parsePersonName($format, $val)
    {
        if (!$format) {
            throw new InvalidPersonNameFormatException("Invalid PersonName format.");
        }

        if (empty($val)) {
            throw new InvalidArgumentException("Must supply a non-null value to parse.");
        }
    }
}