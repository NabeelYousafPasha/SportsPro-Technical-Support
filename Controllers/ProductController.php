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
        
    }

    public function delete($id)
    {
        $product = new Product();
        if ($product->delete($id))
        {
            header("Location: " . WEBROOT . "product");
        }
    }
}