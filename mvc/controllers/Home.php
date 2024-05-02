<?php
class Home extends Controller {
    public $CategoryModel;
    public $ProductModel;

    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
        $this->AccountModel = $this->model("AccountModels");
    }
    
    public function index() {
        $data = $this->ProductModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
            "product" => $data
        ]);
    }
}
?>