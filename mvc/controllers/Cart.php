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
            "page" => "cart/index"
        ]);
    }
    
    public function add() {
        $request = new Request;
        $data = $request->postFields();

        if(isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id'] == $data['id']) {
                    $item['quantity']++;
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $_SESSION['cart'][] = $data;
            }
        }
        else {
            $_SESSION['cart'][] = $data;
        }
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
        $this->OrderModels->add()
        // $this->OrderDetailModels;
        foreach($_SESSION['cart'] as $item) {
            print_r($item);
        }
    }
}
?>