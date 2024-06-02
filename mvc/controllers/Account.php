<?php
class Account extends Controller {
    public $AccountModel;
    
    public function __construct() {
        $this->ProductModel         = $this->model("ProductModels");
        $this->OrderDetailModels    = $this->model('OrderDetailModels');
        $this->OrderModels          = $this->model('OrderModels');
    }

    public function profile() {
        $this->view("layouts/client_layout", [
            "page" => "account/profile",
            "css" => ['account']
        ]);
    }

    public function purchase() {
        $kq = $this->OrderModels->findAll(['*'], ['user_id' => $_SESSION['user']['id']]);
        $data = $this->OrderModels->queryExecute('SELECT * FROM dbo.getPurchase('.$_SESSION['user']['id'].')');
        for($i = 0; $i < count($kq); $i++) {
            foreach($data as $a) {
                if($a['order_id'] == $kq[$i]['id']) {

                    $kq[$i]['products'][] = $a;
                }
            }
        }
        $this->view("layouts/client_layout", [
            "page" => "account/purchase",
            "css" => ['account'],
            "purchase" => $kq
        ]);
    }
    
}
?>