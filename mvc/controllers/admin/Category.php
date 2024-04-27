<?php
class Category extends Controller {
    public $CategoryModel;
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
    }
    public function index() {
        if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
            $categories = $this->CategoryModel->getdata();
            $this->view("layouts/admin_layout", [
                "page" => "category/index",
                "title" => "Danh sách danh mục",
                "category" => $categories,
            ]);
        } else {
            echo "ERROR";
        }
    }
}
?>