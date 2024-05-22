<?php
class Cart extends Controller {
    public $ProductModel;
    public $OrderDetailModels;
    public $OrderModels;
    
    public function __construct() {
        $this->ProductModel = $this->model("ProductModels");
        $this->OrderDetailModels   = $this->model('OrderDetailModels');
        $this->OrderModels         = $this->model('OrderModels');
    }

    public function index() {
        $this->view("layouts/client_layout", [
            "page" => "cart/index",
            "css" => ['shopping'],
        ]);
    }
    
    public function add() {
        if(isset($_POST["add-card-btn"])) {
            unset($_POST["add-card-btn"]);
            $request = new Request();
            $data = $request->postFields();
            // unset($_SESSION['cart']);
            if(isset($_SESSION['cart'])) {
                $found = false;
                for($i = 0; $i < count($_SESSION['cart']); $i++) {
                    if($_SESSION['cart'][$i]['id'] == $data['id']) {
                        $_SESSION['cart'][$i]['quantity'] += $data['quantity'];
                        $found = true;
                        break;
                    }
                }
    
                if(!$found) {
                    $_SESSION['cart'][] = $data;
                }
            }
            else {
                $_SESSION['cart'][] = $data;
            }
        }
        header('location: http://localhost:8088/web/cart');
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $index = $_POST['index'];
            $quantity = $_POST['quantity'];
            $_SESSION['cart'][$index]['quantity'] = $quantity;
        }
    }

    public function delete() {
        $index = $_GET['index'];
        unset($_SESSION['cart'][$index]);
        header('location: http://localhost:8088/web/cart');
    }

    public function buy() {
        $this->view("layouts/client_layout", [
            "page" => "cart/buy",
            "css" => ['shopping'],
        ]);
    }
}
?>