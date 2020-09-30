<?php

require(ROOT . 'Models/Customer.php');

class CustomerController extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $lastName = $_POST['lastName'] ?? null;

            if (! is_null($lastName)) {

                $customer = new Customer();

                $customers = $customer->getWhere(
                    'lastName',
                    'LIKE',
                    "'%$lastName%'"
                );

                $this->set([
                    'customers' => $customers,
                    'searchedLastName' => $lastName,
                ]);
            }
        }

        $this->render("index");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $customer = new Customer();

            if ($customer->create($_POST))
            {
                $this->redirect('customer');
            }
        }

        // else GET
        $this->render("create");
    }


    public function show($id)
    {
        $customer = new Customer();

        $customer = $customer->firstWhere(
            'customerID',
            '=',
            "$id"
        );

        $this->set([
            'customer' => $customer,
        ]);

        $this->render("show");
    }

    public function update($id)
    {
        if (! $id) {
            print_r('Invalid');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $customer = new Customer();

            if ($customer->update($id, $_POST))
            {
                $this->redirect('customer');
            }
        }

    }


    public function delete($id)
    {
        $customer = new Customer();
        if ($customer->delete($id))
        {
            $this->redirect('customer');
        }
    }
}