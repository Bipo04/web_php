<?php
class Category extends Controller {
    public $CategoryModel;
    public $ProductModel;
    
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
    }

    public function index() {
        $categories = $this->CategoryModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "category/index",
            "title" => "Danh sách danh mục",
            "categories" => $categories,
        ]);
    }

    public function girl() {
        $categories = $this->ProductModel->selectJoin(['*'], ['gender' => 'girl'], 'Category', ['category_id', 'id'], 'INNER');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sortValue = $_POST["sort"] ?? null;
            $_SESSION['sort'] = $sortValue;
        }
        $this->view("layouts/client_layout", [
            "page" => "category/girl",
            "title" => "Danh sách danh mục",
            "categories" => $categories,
        ]);
    }
 
}
?>