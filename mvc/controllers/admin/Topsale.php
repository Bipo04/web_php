<?php
class Topsale extends Controller {
    public $OrdersModel;

    public function __construct() {
        $this->OrdersModel = $this->model('OrdersModels');
    }

    public function index() {
        // if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $this->view('layouts/admin_layout', [
                'page' => 'topsale/index',
                'title' => 'Top sản phẩm bán chạy',
                'type' => 'bcao',
            ]);
        // } else {
        //     require_once './mvc/errors/forbidden.php';
        // }
    }
}
?>