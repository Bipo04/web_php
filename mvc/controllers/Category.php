<?php
class Category extends Controller {
    public $CategoryModel;
    public $ProductModel;
    
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
    }

    public function girl($cate = NULL) {
        $req = new Request();
        $fields = [
            'Product.id as id',
            'category_id',
            'title',
            'inbound_price',
            'outbound_price',
            'discount',
            'supply_id',
            'thumbnail',
            'description',
            'quantity',
            'sold',
            'onsale'
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['sort'] = $_POST["sort"] ?? null;
        }
        $categories = $this->CategoryModel->findAll(['name'], ['gender' => 'girl']);
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]['name-slug'] = $req->createSlug($categories[$i]['name']);
        }
        if($cate != NULL) {
            for($i = 0; $i < count($categories); $i++) {
                if($cate == $categories[$i]['name-slug']) {
                    if(isset($_SESSION['sort']) && $_SESSION['sort'] != 'default') {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_SESSION['sort']);
                    }
                    else {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER');
                    }
                }
            }
        } else {
            if(isset($_SESSION['sort']) && $_SESSION['sort'] != 'default') {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_SESSION['sort']);
            }
            else {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER');
            }
        }
        $this->view("layouts/client_layout", [
            "page" => "category/girl",
            "css" => ["category"],
            "title" => "Danh sách danh mục",
            "products" => $products,
            "categories" => $categories,
            "cate" => $cate
        ]);
    }

    public function boy($cate = NULL) {
        $req = new Request();
        $fields = [
            'Product.id as id',
            'category_id',
            'title',
            'inbound_price',
            'outbound_price',
            'discount',
            'supply_id',
            'thumbnail',
            'description',
            'quantity',
            'sold',
            'onsale'
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['sort'] = $_POST["sort"] ?? null;
        }
        $categories = $this->CategoryModel->findAll(['name'], ['gender' => 'boy']);
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]['name-slug'] = $req->createSlug($categories[$i]['name']);
        }
        if($cate != NULL) {
            for($i = 0; $i < count($categories); $i++) {
                if($cate == $categories[$i]['name-slug']) {
                    if(isset($_SESSION['sort']) && $_SESSION['sort'] != 'default') {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'boy', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_SESSION['sort']);
                    }
                    else {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'boy', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER');
                    }
                }
            }
        } else {
            if(isset($_SESSION['sort']) && $_SESSION['sort'] != 'default') {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'boy'], 
                    'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_SESSION['sort']);
            }
            else {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'boy'], 
                    'Category', ['category_id', 'id'], 'INNER');
            }
        }
        $this->view("layouts/client_layout", [
            "page" => "category/boy",
            "css" => ["category"],
            "title" => "Danh sách danh mục",
            "products" => $products,
            "categories" => $categories,
            "cate" => $cate
        ]);
    }
}
?>