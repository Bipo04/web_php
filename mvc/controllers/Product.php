<?php
class Product extends Controller
{
    public $ProductModel;
    public function __construct()
    {
        $this->ProductModel = $this->model("ProductModels");
    }
    public function index()
    {
        $products = $this->ProductModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "product/index",
            "title" => "Danh sách danh mục",
            "product" => $products,
        ]);
    }
}

?>