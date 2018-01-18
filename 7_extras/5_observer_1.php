<?php

interface Observer1
{
    public function addCurrency(Currency $currency);
}

class priceSimulator implements Observer1
{
    private $currencies = array();

    public function addCurrency(Currency $currency)
    {
        $this->currencies[] = $currency;
    }

    public function updatePrice()
    {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }
}

interface Currency
{
    public function update();
    public function getPrice();
}

class Pound implements Currency
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function update()
    {
        $this->price = $this->getPrice();
    }

    public function getPrice()
    {
        return f_rand(0.65, 0.71);
    }
}

$priceSimulator = new priceSimulator();
$priceSimulator->addCurrency(new Pound(0.60));

$priceSimulator->updatePrice();

