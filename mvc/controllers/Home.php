<?php
class Home extends Controller {
    public $CategoryModel;
    public $ProductModel;

    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
    }
    
    public function index() {
        $dataGirl = $this->ProductModel->selectJoin(['*'], '10', ['gender' => 'girl'], 'Category', ['category_id', 'id'], 'INNER');
        $dataBoy = $this->ProductModel->selectJoin(['*'], '10', ['gender' => 'boy'], 'Category', ['category_id', 'id'], 'INNER');
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
            "css" => ["main"],
            "data" => ["dataGirl" => $dataGirl,
                        "dataBoy" => $dataBoy]
        ]);
    }
}
?>