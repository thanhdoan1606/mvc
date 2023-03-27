<?php

namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {

        $sql = "INSERT INTO customers (customerNumber, customerName, contactLastName,contactFirstName,phone,addressLine1,city,country) VALUES ( ?, ?, ?, ?, ?, ? ,? ,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->customerNumber);
        $statement->bindParam(2, $customer->customerName);
        $statement->bindParam(3, $customer->contactLastName);
        $statement->bindParam(4, $customer->contactFirstName);
        $statement->bindParam(5, $customer->phone);
        $statement->bindParam(6, $customer->addressLine1);
        $statement->bindParam(7, $customer->city);
        $statement->bindParam(8, $customer->country);
        return $statement->execute();
    }

    public function getAll()
    {

        $sql = "SELECT * FROM customers";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];

        foreach ($result as $row) {
            $customer = new Customer($row['customerNumber'], $row['customerName'], $row['contactLastName'], $row['contactFirstName'], $row['phone'], $row['addressLine1'], $row['city'], $row['country']);
            $customers[] = $customer;
        }
        return $customers;
    }

    public function get($customerNumber)
    {
        $sql = "SELECT * FROM customers WHERE customerNumber = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customerNumber);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['customerNumber'], $row['customerName'], $row['contactLastName'], $row['contactFirstName'], $row['phone'], $row['addressLine1'], $row['city'], $row['country']);
        $customer->customerNumber = $row['customerNumber'];
        return $customer;
    }

    public function delete($customerNumber)
    {
        $sql = "DELETE FROM customers WHERE customerNumber = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customerNumber);
        return $statement->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customers SET customerName = ?, contactLastName = ? , contactFirstName = ? , phone = ? , addressLine1 = ? , city = ? , country = ? WHERE customerNumber = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->customerName);
        $statement->bindParam(2, $customer->contactLastName);
        $statement->bindParam(3, $customer->contactFirstName);
        $statement->bindParam(4, $customer->phone);
        $statement->bindParam(5, $customer->addressLine1);
        $statement->bindParam(6, $customer->city);
        $statement->bindParam(7, $customer->country);
        $statement->bindParam(8, $id);
        return $statement->execute();
    }
}
