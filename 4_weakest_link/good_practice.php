<?php

interface AddressFormatter
{
    public function format($addressLine1, $addressLine2, $city, $state, $postalCode, $country);
}

class MultiLineAddressFormatter implements AddressFormatter
{
    public function format($addressLine1, $addressLine2, $city, $state, $postalCode, $country)
    {
        // TODO: Implement format() method.
    }
}

class InlineAddressFormatter implements AddressFormatter
{
    public function format($addressLine1, $addressLine2, $city, $state, $postalCode, $country)
    {
        // TODO: Implement format() method.
    }
}

class AddressFormatUtils
{
    public static function formatAddress($type, $address) {
        $formatter = AddressFormatUtils::createAddressFormatter($type);

        return $formatter->format($address->getAddressLine1(),
            $address->getAddressLine2(),
            $address->getCity(), $address->getState(),
            $address->getPostalCode(), $address->getCountry()
        );
    }

    private static function createAddressFormatter($type)
    {
        switch ($type) {
            case "inline":
                $formatter = new InlineAddressFormatter();
                break;
            case "multiline":
                $formatter = new MultiLineAddressFormatter();
                break;
            default:
                $formatter = new NullAddressFormatter();
                break;
        }

        return $formatter;
    }
}

$addr = new Address();
$addr->setAddressLine1("123 Any St.");
$addr->setAddressLine2("Ste 200");
$addr->setCity("Anytown");
$addr->setState("AY");
$addr->setPostalCode("55555-0000");
$addr->setCountry("US");

echo(AddressFormatUtils::formatAddress("multiline", $addr));
echo("\n");

echo(AddressFormatUtils::formatAddress("inline", $addr));
echo("\n");