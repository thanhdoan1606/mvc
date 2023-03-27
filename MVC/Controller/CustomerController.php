<?php

namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=127.0.0.1;port=3300;dbname=dome", "root", "Nhuid1995bc");
        $this->customerDB = new CustomerDB($connection->connect());
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $customerNumber = $_POST['customerNumber'];
            $customerName = $_POST['customerName'];
            $contactLastName = $_POST['contactLastName'];
            $contactFirstName = $_POST['contactFirstName'];
            $phone = $_POST['phone'];
            $addressLine1 = $_POST['addressLine1'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $customer = new Customer((int)$customerNumber, $customerName, $contactLastName, $contactFirstName, (int)$phone, $addressLine1, $city, $country);
            $this->customerDB->create($customer);
            $message = 'Customer created';
            include 'view/add.php';
        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();

        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customerNumber = $_GET['id'];
            $customer = $this->customerDB->get($customerNumber);
            include 'view/delete.php';
        } else {
            $customerNumber = $_POST['id'];
            var_dump($customerNumber);
            $this->customerDB->delete($customerNumber);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['customerNumber'];
            $customer = new Customer( $_POST['customerNumber'],$_POST['customerName'],$_POST['contactLastName'],$_POST['contactFirstName'],$_POST['contactFirstName'],$_POST['contactFirstName'],$_POST['phone'],$_POST['addressLine1'],$_POST['city'],$_POST['country']);
            $this->customerDB->update($id, $customer);
            header('Location: index.php');
        }
    }
}
