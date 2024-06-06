<?php
class Order extends Controller {
    public $ProductModel;
    public $OrderDetailModel;
    public $OrderModel;
    
    public function __construct() {
        $this->ProductModel         = $this->model("ProductModels");
        $this->OrderDetailModel    = $this->model('OrderDetailModels');
        $this->OrderModel          = $this->model('OrderModels');
    }

    public function index() {
        $orders = $this->OrderModel->getdata();
        $this->view('layouts/admin_layout', [
            'page' => 'order/index',
            'title' => 'Danh sách đơn hàng',
            'type' => 'qli',
            'orders' => $orders
        ]);
    }

    public function update() {
        if(isset($_POST['btn'])) {
            $req = new Request();
            unset($_POST['btn']);
            $data = $req->postFields();
            $id = $data['id'];
            unset($data['id']);
            $this->SupplyModel->update($data, ['id' => $id]);
            header('location: http://localhost:8088/web/admin/supply');
        }
        $id = $_GET['id'];
        $supply = $this->SupplyModel->findAll(['*'], ['id' => $id]);
        $this->view('layouts/admin_layout', [
            'page' => 'supply/update',
            'title' => 'Chỉnh sửa thông tin nhà cung cấp',
            'type' => 'qli',
            'supply' => $supply[0]
        ]);
    }

    public function detail() {
        // $req = new Request();
        // $data = $req->getFields();
        // $id = $data['id'];
        // $order = $this->OrderModel->findAll(['*'], ['id' => $id]);
        // $orderDetails = $this->OrderDetailModel->findAll(['*'], ['order_id' => $id]);
        $this->view('layouts/admin_layout', [
            'page' => 'order/details',
            'title' => 'Chi tiết đơn hàng',
            'type' => 'qli',
            // 'order' => $order,
            // 'orderDetails' => $orderDetails
        ]);
    }
}
?>