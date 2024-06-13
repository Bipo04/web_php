<?php
class Product extends Controller {
    public $ProductModel;
    public $CategoryModel;
    public $SupplyModel;

    public function __construct() {
        $this->ProductModel = $this->model('ProductModels');
        $this->CategoryModel = $this->model('CategoryModels');
        $this->SupplyModel = $this->model('SupplyModels');
    }

    public function index() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $products = $this->ProductModel->getdata();
            $this->view('layouts/admin_layout', [
                'page' => 'product/index',
                'title' => 'Danh sách sản phẩm',
                'product' => $products,
                'type' => 'qli',
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function add() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            if (isset($_POST['btn'])) {
                $req = new Request();
                unset($_POST['btn']);
                $data = $req->postFields();
                $check =    ['name' => $data['category_name'],
                            'gender' => $data['gender']];
                $a = $this->CategoryModel->findAll(['id'], $check);
                $b = $this->SupplyModel->findAll(['id'], ['name' => $data['supply']]);
                unset($data['category_name']);
                unset($data['gender']);
                unset($data['supply']);
                if(!$a) {
                    echo 'Danh mục và giới tính không tồn tại';
                }
                if(!$b) {
                    echo 'Nhà cung cấp không tồn tại';
                }
                if($a && $b) {
                    $data['category_id'] = $a[0]['id'];
                    $data['supply_id'] = $b[0]['id'];
                    $file = $_FILES['img']['name'];
                    $slug_folder = $req->createSlug($data['title']);
        
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
            }
    
            $this->view('layouts/admin_layout', [
                'page' => 'product/add',
                'title' => 'Thêm sản phẩm',
                'type' => 'qli',
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function delete() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $req = new Request();
                $data = $req->postFields();
                $id = $data['id'];
                $this->CategoryModel->deleteById($id);
            }
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function update() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $req = new Request();
            $data = $req->getFields();
            $query = 'SELECT * FROM getProduct('.$data['id'].')';
            $product = $this->ProductModel->queryExecute($query);
            $this->view('layouts/admin_layout', [
                'page' => 'product/update',
                'title' => 'Thêm sản phẩm',
                'type' => 'qli',
                'product' => $product[0],
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>