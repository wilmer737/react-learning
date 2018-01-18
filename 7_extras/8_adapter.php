<?php

interface PaymentInterface
{
    public function addItem($item);
    public function makePayment();
}

class PaymentSystem implements PaymentInterface
{
    public function addItem($item) {}
    public function makePayment() {}

}

class PaymentSystemv2
{
    public function addItems($items) {}
    public function makePayment() {}

    public function getOrders() {}
    public function cancelOrder($orderId) {}
}

class PaymentSystemAdapter implements PaymentInterface
{
    private $paymentSystem;
    public function __construct($paymentSystem) {
        $this->paymentSystem = $paymentSystem;
    }
    public function addItem($item) {
        $this->paymentSystem->addItems([$item]);
    }

    public function makePayment() {}
}