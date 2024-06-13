<?php
class Revenue extends Controller {
    public $OrdersModel;

    public function __construct() {
        $this->OrdersModel = $this->model('OrdersModels');
    }

    public function index() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $data = $this->OrdersModel->queryExecute("SELECT *
                                                    FROM DayProfit('2024-06-13')
                                                    ORDER BY sold;"
                                                    );
            $this->view('layouts/admin_layout', [
                'page' => 'revenue/index',
                'type' => 'none',
                'revenue' => $data
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>