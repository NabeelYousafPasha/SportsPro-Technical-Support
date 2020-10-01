<?php

require(ROOT . 'Models/Product.php');
require(ROOT . 'Models/CustomerRegisteredProduct.php');

class ProductController extends Controller
{
    public function index()
    {
        $products = (new Product())->get();

        $this->set(['products' => $products]);
        $this->render("index");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $product = new Product();

            if ($product->create($_POST))
            {
                $this->redirect('product');
            }
        }

        // else GET
        $this->render("create");
    }

    public function delete($id)
    {
        $product = new Product();
        if ($product->delete($id))
        {
            $this->redirect('product');
        }
    }


    // Customer Register Product
    public function register()
    {
        if(! $_SESSION['user']) {
            header("Location: ".WEBROOT."login");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customerProduct = new CustomerRegisteredProduct();

            $customerID = $_SESSION['user']['customerID'];

            if ($customerProduct->create($_POST + [
                    'customerID' => $customerID,
                    'registrationDate' => date('Y-m-d'),
                ]))
            {
                $this->set([
                    'status' => true,
                    'view' => 'success',
                    'message' => "Product " .$_POST['productCode']  ." was registered successfully",
                ]);

                return $this->render('response');
            }
        }

        return $this->showRegisterProductForm();
    }

    public function showRegisterProductForm()
    {
        $products = (new Product())->get();
        $this->set([
            'products' => $products,
            'customer' => $_SESSION['user'] ?? [],
        ]);

        $this->render("register");
    }

}