<?php
class Supply extends Controller {
    public $SupplyModel;

    public function __construct() {
        $this->SupplyModel = $this->model('SupplyModels');
    }

    public function index() {
        $supplies = $this->SupplyModel->getdata();
        $this->view('layouts/admin_layout', [
            'page' => 'supply/index',
            'title' => 'Danh sách nhà phâm phối',
            'supplies' => $supplies,
            "type" => "qli",
        ]);
    }
}
?>