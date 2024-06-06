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
        if(isset($_SESSION['user'])) {
            $this->view("layouts/client_layout", [
                "page" => "cart/index",
                "css" => ['shopping'],
            ]);
        }
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }
    
    public function add() {
        if(isset($_SESSION['user'])) {
            if(isset($_POST["add-card-btn"])) {
                unset($_POST["add-card-btn"]);
                $request = new Request();
                $data = $request->postFields();
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
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }

    public function update() {
        if(isset($_SESSION['user'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $index = $_POST['index'];
                $quantity = $_POST['quantity'];
                $_SESSION['cart'][$index]['quantity'] = $quantity;
            }
        }
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }

    public function delete() {
        if(isset($_SESSION['user'])) {
            $index = $_GET['index'];
            unset($_SESSION['cart'][$index]);
            header('location: http://localhost:8088/web/cart');
        }
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }

    public function checkout() {
        if(isset($_SESSION['user'])) {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['type']) && $_POST['type'] == 'change') {
                    $_SESSION['temp']['fullname'] = $_POST['fullname'];
                    $_SESSION['temp']['phone_number'] = $_POST['phone_number'];
                    $_SESSION['temp']['address'] = $_POST['address'];
                }
                if(isset($_POST['buy-btn'])) {
                    unset($_POST['buy-btn']);
                    $res = new Request();
                    unset($_SESSION['buy']);
                    $_SESSION['buy1'][] = $res->postFields();
                }
                $cart = null;
                if(isset($_SESSION['buy1'])) {
                    $cart = $_SESSION['buy1'];
                    $_SESSION['buy2'] = $_SESSION['buy1'];
                    unset($_SESSION['buy1']);
                }
                $this->view("layouts/client_layout", [
                    "page" => "cart/checkout",
                    "css" => ['formbuy'],
                    "cart" => $cart
                ]);
            }
            else {
                require_once './mvc/errors/404.php';
            }
        }
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }
    // id, user_id, order_date, status, consignee_name, address, phone_number
    public function buy() {
        if(isset($_SESSION['user'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['type']) && $_POST['type'] == 'buy') {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = date("Y-m-d H:m:s");
                $data = [   'user_id'           => $_SESSION['user']['id'],
                            'order_date'        => $time,
                            'total_money'       => $_POST['totalprice'],
                            'consignee_name'    => $_POST['consignee_name'],
                            'address'           => $_POST['address'],
                            'phone_number'      => $_POST['phone_number']
                ];
                $kq = $this->OrderModels->add($data);
                $result = json_decode($kq, true);
                if($result['type'] == 'success') {
                    if(isset($_SESSION['buy2'])) {
                        $products = $_SESSION['buy2'];
                        unset($_SESSION['buy2']);
                        echo "Đã xóa";
                    }
                    else {
                        $products = $_SESSION['cart'];
                        unset($_SESSION['cart']);
                    }
                    foreach($products as $item) {
                        $d = [  'order_id' => $result['id'],
                                'product_id' => $item['id'],
                                'num' => $item['quantity'],
                                'price' => $item['price']
                        ];
                        $this->OrderDetailModels->add($d);
                    }
                }
            }
        }
        else {
            header('location: http://localhost:8088/web/auth/login');
        }
    }
}
?>