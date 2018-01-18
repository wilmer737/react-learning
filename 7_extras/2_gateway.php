<?php

class CustomerGateway
{
    public function getCustomer(int $id) {
        // Database functionality to retrieve the customer.
        return new Customer();
    }
}