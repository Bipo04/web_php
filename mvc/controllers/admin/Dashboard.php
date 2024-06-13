<?php
class Dashboard extends Controller {
    public $CategoryModel;
    public function __construct() {
        $this->CategoryModel = $this->model("CategoryModels");
    }
    
    public function index() {
        if(isset($_COOKIE['userId']) && $_SESSION[$_COOKIE['userId']]['role_id'] == '1') {
            $this->view("layouts/admin_layout", [
                "page" => "dashboard/index",
                "title" => "Dashboard",
                "type" => "none"
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

}
?>