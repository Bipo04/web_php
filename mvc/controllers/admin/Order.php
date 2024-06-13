<?php
class Order extends Controller {
    public $ProductModel;
    public $OrderDetailModel;
    public $OrdersModel;
    
    public function __construct() {
        $this->ProductModel         = $this->model("ProductModels");
        $this->OrderDetailModel    = $this->model('OrderDetailModels');
        $this->OrdersModel          = $this->model('OrdersModels');
    }

    public function index() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $orders = $this->OrdersModel->getdata();
            $this->view('layouts/admin_layout', [
                'page' => 'order/index',
                'title' => 'Danh sách đơn hàng',
                'type' => 'qli',
                'orders' => $orders
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function update() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $status = $_POST['status'];
                $this->OrdersModel->update(['status' => $status], ['id' => $id]);
            }
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function detail() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $req = new Request();
            $data = $req->getFields();
            $id = $data['id'];
            $order = $this->OrdersModel->findAll(['*'], ['id' => $id]);
            $select = ['order_id', 'product_id', 'title', 'num', 'price', 'thumbnail'];
            $orderDetails = $this->OrderDetailModel->selectJoin($select, null, ['order_id' => $id], 
            'Product', ['product_id', 'id'],  'LEFT');
            $this->view('layouts/admin_layout', [
                'page' => 'order/details',
                'title' => 'Chi tiết đơn hàng',
                'type' => 'qli',
                'order' => $order[0],
                'orderDetails' => $orderDetails
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>