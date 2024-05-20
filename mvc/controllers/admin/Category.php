<?php
class Category extends Controller {
    public $CategoryModel;
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
    }
    
    public function index() {
        // if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        //     $categories = $this->CategoryModel->getdata();
        //     $this->view("layouts/admin_layout", [
        //         "page" => "category/index",
        //         "title" => "Danh sách danh mục",
        //         "category" => $categories,
        //     ]);
        // } else {
        //     echo "FORBIDDEN";
        // }

        $categories = $this->CategoryModel->getdata();
        $this->view("layouts/admin_layout", [
            "page" => "category/index",
            "title" => "Danh sách danh mục",
            "category" => $categories,
        ]);
    }
    
    public function add() {
        if(isset($_POST['btn'])) {
            $req = new Request();
            unset($_POST['btn']);
            $data = $req->postFields();
            $this->CategoryModel->add($data);
            header('location: http://localhost:8088/web/admin/category');
        }

        $this->view('layouts/admin_layout', [
            'page' => 'category/add',
            'title' => 'Thêm danh mục',
        ]);
    }
    
    public function delete() {
        $req = new Request();
        $data = $req->getFields();
        $this->CategoryModel->delete($data);
        header('location: http://localhost:8088/web/admin/category');
        die;
    }

    public function update() {
        $req = new Request();
        if(isset($_POST['btn']) && $_POST['btn']) {
            unset($_POST['btn']);
            $id = $_POST['id'];
            unset($_POST['id']);
            $data = $req->postFields();
            $this->CategoryModel->update($data, ['id' => $id]);
            header('location: http://localhost:8088/web/admin/category');
            die;
        }
        $data = $req->getFields();
        $a = $this->CategoryModel->findAll(['*'], ['id' => $data['id']]);
        $this->view("layouts/admin_layout", [
            "page" => "category/update",
            "title" => "Sửa danh mục",
            "category" => $a,
        ]);
    }

}
?>