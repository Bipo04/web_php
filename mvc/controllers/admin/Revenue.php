<?php
class Revenue extends Controller {
    // public $SupplyModel;

    public function __construct() {
        // $this->SupplyModel = $this->model('SupplyModels');
    }

    public function index() {
        if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == '1') {
            $this->view('layouts/admin_layout', [
                'page' => 'revenue/index',
                'title' => 'Danh sách nhà cung cấp',
                'type' => 'none',
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>