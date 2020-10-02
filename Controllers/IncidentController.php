<?php

require(ROOT . 'Models/Technician.php');
require(ROOT . 'Models/Customer.php');
require(ROOT . 'Models/CustomerRegisteredProduct.php');
require(ROOT . 'Models/Incident.php');

class IncidentController extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $customer = $this->getCustomer();

            if (! $customer) {
                return $this->render('index');
            }

            $products = $this->getRegisteredProducts($customer);

            if (empty($products)) {
                $_SESSION['error'] = 'No Customer Registered Products';
                return $this->render('index');
            }

            $this->set([
                'customer' => $customer,
                'products' => $products,
            ]);

            return $this->render("create");

        }

        // Get Customer Form
        $this->render("index");
    }


    public function getCustomer()
    {
        $email = $_POST['email'] ?? false;

        if (! $email) {
            $_SESSION['error'] = "Email Not Provided";
            return false;
        }

        $customer = (new Customer())->firstWhere(
            'email',
            '=',
            "'$email'"
        );

        if (! $customer) {
            $_SESSION['error'] = "Customer Not Found";
            return false;
        }

        return $customer;
    }


    public function getRegisteredProducts($customer)
    {
        $customerID = $customer['customerID'];

        $customerRegisteredProduct = new CustomerRegisteredProduct();

        $products = $customerRegisteredProduct->getWhere(
            'customerID',
            '=',
            "'$customerID'"
        );

        return $products;
    }


    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $incident = new Incident();

            if ($incident->create(array_merge($_POST, [
                'dateOpened' => date('Y-m-d'),
            ])))
            {
                $this->set([
                    'status' => true,
                    'view' => 'success',
                    'message' => "This Incident was added to our database successfully",
                ]);

                return $this->render('response');
            }
        }
    }

}