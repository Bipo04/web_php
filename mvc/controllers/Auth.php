<?php
class Auth extends Controller {
    public $AccountModel;
    
    public function __construct() {
        $this->AccountModel = $this->model("AccountModels");
    }

    public function index() {
        echo "ERROR";
    }

    public function login() {
        if(isset($_POST['btn_log']) && $_POST['btn_log']) {
            unset($_POST['btn_log']);
            $request = new Request;
            $data = $request->postFields();
            $result = $this->AccountModel->login($data);
            if($result) {
                if($_SESSION['role'] == 'admin') {
                    header("Location: http://localhost:8088/web/admin/category");
                }
                if($_SESSION['role'] == 'user') {
                    header("Location: http://localhost:8088/web/home");
                }
        
            } else {
                $_SESSION['log'] = 'false';
            }
        }
            $this->view("auth/login");
    }

    public function register() {
        $arr = array();
        if(isset($_POST['btn_reg']) && $_POST['btn_reg']) {
            unset($_POST['btn_reg']);
            $request = new Request;
            $data = $request->postFields();
            $result = $this->AccountModel->register($data);
            $result = json_decode($result, true);
            if($result['type'] == 'success')
                $_SESSION['reg'] = 'true';
            else if($result['type'] == 'fail') {
                $_SESSION['reg'] = 'false';
            }
        }
        $this->view("auth/register");
    }

    public function logout() {
        session_unset();
        header('location: http://localhost:8088/web/auth/login');
    }
}

?>