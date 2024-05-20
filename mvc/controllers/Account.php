<?php
class Account extends Controller {
    public $AccountModel;
    
    public function __construct() {
        $this->AccountModel = $this->model("UserModels");
    }

    public function profile() {
        $user = $this->AccountModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "account/profile",
            "css" => ['account']
            // "title" => "Danh sách danh mục",
            // "categories" => $categories,
        ]);
    }

    public function purchase() {
        $user = $this->AccountModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "account/purchase",
            "css" => ['account'],
            // "title" => "Danh sách danh mục",
            // "categories" => $categories,
        ]);
    }
    
}
?>