<?php
class Home extends Controller {
    public $CategoryModel;
    public $ProductModel;

    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
    }
    
    public function index() {
        $data = $this->ProductModel->getdata();
        // print_r($data[0]);
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
            "product" => $data
        ]);
    }
}
?>