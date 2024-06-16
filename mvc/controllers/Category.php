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
        $categories = $this->CategoryModel->findAll(['name'], ['gender' => 'girl']);
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]['name-slug'] = $req->createSlug($categories[$i]['name']);
        }
        if($cate != NULL) {
            for($i = 0; $i < count($categories); $i++) {
                if($cate == $categories[$i]['name-slug']) {
                    if(isset($_GET['order']) && $_GET['order'] != 'default') {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
                    }
                    else {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER');
                    }
                }
            }
        } else {
            if(isset($_GET['order']) && $_GET['order'] != 'default') {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
            }
            else {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER');
            }
        }
        
        if(isset($_GET['order'])) {
            $order = $_GET['order'];
        }
        else {
            $order = 'default';
        }
        
        $this->view("layouts/client_layout", [
            "page" => "category/girl",
            "css" => ["category"],
            "title" => "Danh sách danh mục",
            "products" => $products,
            "categories" => $categories,
            "cate" => $cate,
            "order" => $order,
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
        $categories = $this->CategoryModel->findAll(['name'], ['gender' => 'boy']);
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]['name-slug'] = $req->createSlug($categories[$i]['name']);
        }
        if($cate != NULL) {
            for($i = 0; $i < count($categories); $i++) {
                if($cate == $categories[$i]['name-slug']) {
                    if(isset($_GET['order']) && $_GET['order'] != 'default') {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'boy', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
                    }
                    else {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'boy', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER');
                    }
                }
            }
        } else {
            if(isset($_GET['order']) && $_GET['order'] != 'default') {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'boy'], 
                    'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
            }
            else {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'boy'], 
                    'Category', ['category_id', 'id'], 'INNER');
            }
        }

        if(isset($_GET['order'])) {
            $order = $_GET['order'];
        }
        else {
            $order = 'default';
        }

        $this->view("layouts/client_layout", [
            "page" => "category/boy",
            "css" => ["category"],
            "title" => "Danh sách danh mục",
            "products" => $products,
            "categories" => $categories,
            "cate" => $cate,
            "order" => $order,
        ]);
    }

    public function discount() {
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
        $categories = $this->CategoryModel->findAll(['name'], ['gender' => 'girl']);
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]['name-slug'] = $req->createSlug($categories[$i]['name']);
        }
        if($cate != NULL) {
            for($i = 0; $i < count($categories); $i++) {
                if($cate == $categories[$i]['name-slug']) {
                    if(isset($_GET['order']) && $_GET['order'] != 'default') {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
                    }
                    else {
                        $products = $this->ProductModel->selectJoin($fields, null, 
                            ['gender' => 'girl', 'name' => $categories[$i]['name']], 
                            'Category', ['category_id', 'id'], 'INNER');
                    }
                }
            }
        } else {
            if(isset($_GET['order']) && $_GET['order'] != 'default') {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER', 'outbound_price', $_GET['order']);
            }
            else {
                $products = $this->ProductModel->selectJoin($fields, null, 
                    ['gender' => 'girl'], 
                    'Category', ['category_id', 'id'], 'INNER');
            }
        }
        
        if(isset($_GET['order'])) {
            $order = $_GET['order'];
        }
        else {
            $order = 'default';
        }
        
        $this->view("layouts/client_layout", [
            "page" => "category/girl",
            "css" => ["category"],
            "title" => "Danh sách danh mục",
            "products" => $products,
            "categories" => $categories,
            "cate" => $cate,
            "order" => $order,
        ]);
    }
}
?>