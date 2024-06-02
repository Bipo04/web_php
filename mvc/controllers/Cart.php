<?php
class Cart extends Controller {
    public $ProductModel;
    public $OrderDetailModels;
    public $OrderModels;
    
    public function __construct() {
        $this->ProductModel         = $this->model("ProductModels");
        $this->OrderDetailModels    = $this->model('OrderDetailModels');
        $this->OrderModels          = $this->model('OrderModels');
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

    public function checkout() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['temp']['fullname'] = $_POST['fullname'];
            $_SESSION['temp']['phone_number'] = $_POST['phone_number'];
            $_SESSION['temp']['address'] = $_POST['address'];
        }
        $this->view("layouts/client_layout", [
            "page" => "cart/buy",
            "css" => ['formbuy'],
        ]);
    }
    // id, user_id, order_date, status, consignee_name, address, phone_number
    public function buy() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = date("Y-m-d H:m:s");
            $data = [   'user_id'           => $_SESSION['user']['id'],
                        'order_date'        => $time,
                        'total_money'       => $_POST['totalprice'],
                        'consignee_name'    => $_POST['consignee_name'],
                        'address'           => $_POST['address'],
                        'phone_number'      => $_POST['phone_number']
            ];
            $this->OrderModels->add($data);
        }
    }
}
?>