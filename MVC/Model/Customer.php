<?php

namespace Model;

class Customer
{
    public $id;
    public $customerNumber;
    public $customerName;
    public $phone;
    public $addressLine1;
    public $contactLastName;
    public $contactFirstName;
    public $city;
    public $country;


    public function __construct($customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $city, $country)
    {
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
        $this->contactFirstName = $contactFirstName;
        $this->contactLastName = $contactLastName;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->country = $country;
   
    }
}
