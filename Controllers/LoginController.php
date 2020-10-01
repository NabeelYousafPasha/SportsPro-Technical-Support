<?php

require(ROOT . 'Models/Customer.php');

class LoginController extends Controller
{

    public function index()
    {
        $this->render("login");
    }


    public function auth($callback)
    {
        $auth = $this->$callback();

        if (! $auth) {
            return $this->index();
        }

        switch ($callback) {
            case 'customer':
                return $this->redirect('product/register');
                break;
            default:
                return $this->redirect();
                break;
        }

    }


    // login for Customer
    public function customer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'] ?? null;

            if (! $email) {
                $_SESSION['error'] = "Email Not Provided";
                return false;
            }

            $customer = new Customer();

            $customer = $customer->firstWhere(
                'email',
                '=',
                "'$email'"
            );

            if (! $customer) {
                $_SESSION['error'] = "Customer Not Found";
                return false;
            }

            $this->set([
                'customer' => $customer,
            ]);

            // session
            $_SESSION['user'] = $customer;
            $_SESSION['authType'] = 'customer';
            $_SESSION['authId'] = $customer['customerID'];

            return true;
        }
    }
}