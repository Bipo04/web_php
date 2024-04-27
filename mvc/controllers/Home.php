<?php
class Home extends Controller {
    public $CategoryModel;
    public $ProductModel;
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->AccountModel = $this->model("AccountModels");
    }
    public function index() {
        $data = $this->CategoryModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
            "data" => $data
        ]);
    }
}
?>