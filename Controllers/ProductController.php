<?php

require(ROOT . 'Models/Product.php');

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

}