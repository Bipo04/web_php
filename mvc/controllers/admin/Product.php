<?php
class Product extends Controller {
    public $ProductModel;

    public function __construct() {
        $this->ProductModel = $this->model('ProductModels');
    }

    public function index() {
        $products = $this->ProductModel->getdata();
        $this->view('layouts/admin_layout', [
            'page' => 'product/index',
            'title' => 'Danh sách sản phẩm',
            'product' => $products,
        ]);
    }

    public function add() {
        if (isset($_POST['btn'])) {
            $req = new Request();
            unset($_POST['btn']);
            $data = $req->postFields();
            $file = $_FILES['img']['name'];
            $slug_folder = $req->createSlug($data['name']);

            $public_dir = 'public/clients/images';
            $new_folder = $public_dir . '/' . $slug_folder;
            if (!is_dir($new_folder)) {
                mkdir($new_folder, 0777, true);
            }
            $i = 0;
            foreach($file as $val) {
                move_uploaded_file($_FILES['img']['tmp_name'][$i++], $new_folder . '/' . $val);
                $thumb[] = $slug_folder. '/' .$val;
            }
            $data['thumbnail'] = implode(',', $thumb);
            $this->ProductModel->add($data);
            header('location: http://localhost:8088/web/admin/product');
        }

        $this->view('layouts/admin_layout', [
            'page' => 'product/add',
            'title' => 'Thêm sản phẩm',
        ]);
    }

    public function delete() {
        $req = new Request();
        $data = $req->getFields();
        $this->ProductModel->delete($data);
        header('location: http://localhost:8088/web/admin/product');
    }
}
?>