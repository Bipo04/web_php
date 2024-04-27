<?php
class Category extends Controller {
    public $CategoryModel;
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
    }
    public function index() {
        $categories = $this->CategoryModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "category/index",
            "title" => "Danh sách danh mục",
            "categories" => $categories,
        ]);
    }
 
}
?>