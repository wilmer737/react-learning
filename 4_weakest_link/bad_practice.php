<?php
class InlineAddressFormatter {}
class MultiLineAddressFormatter {}
class NullAddressFormatter {}

class Address
{
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $state;
    private $postalCode;
    private $country;

    public function setAddressLine1($line1)
    {
        $this->addressLine1 = $line1;
    }

    /** The rest of the accessors, etc. */

    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    public function getAddressLine2()
    {
        return $this->addressLine2;
    }
    public function setAddressLine2($line2)
    {
        $this->addressLine2 = $line2;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getState()
    {
        return $this->state;
    }
    public function setState($state)
    {
        $this->state = $state;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }
    public function setPostalCode($postal)
    {
        $this->postalCode = $postal;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function format($type)
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

        return $formatter->format($this->getAddressLine1(),
            $this->getAddressLine2(),
            $this->getCity(),
            $this->getState(),
            $this->getPostal(),
            $this->getCountry()
        );
    }
}

$addr = new Address();
$addr->setAddressLine1("123 Any St.");
$addr->setAddressLine2("Ste 200");
$addr->setCity("Anytown");
$addr->setState("AY");
$addr->setPostalCode("55555-0000");
$addr->setCountry("US");

echo($addr->format("multiline"));
echo("\n");

echo($addr->format("inline"));
echo("\n");