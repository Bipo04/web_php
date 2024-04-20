<?php
class Auth extends Controller
{
    public $AccountModel;
    
    public function index()
    {
        echo "ERROR";
    }
    

    public function __construct()
    {
        $this->AccountModel = $this->model("AccountModels");
    }

    public function login()
    {
        $arr = array();
        if(isset($_POST['btn_log']) && $_POST['btn_log'])
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $kq = $this->AccountModel->findSingle(["*"] , ["Username" => $username]);
            if($kq)
            {
                if($kq['Password'] == $password)
                {
                    if($kq['Role_id'] == "1")
                    {
                        $_SESSION['role'] = 'admin';
                        header("Location: http://localhost:8088/web/admin/category");
                    }
                    if($kq['Role_id'] == "2")
                    {
                        $_SESSION['role'] = 'user';
                        header("Location: http://localhost:8088/web");
                    }
                }
                else
                {
                    $arr = ['succes' => 'false'];
                }
            }
            else
            {
                $arr = ['succes' => 'false'];
            }

        }
            $this->view("auth/login", $arr);
    }

    public function register()
    {
        $arr = array();
        if(isset($_POST['btn_reg']) && $_POST['btn_reg'])
        {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $kq = $this->AccountModel->findSingle(["*"],['username' => $username]);
            if(!$kq)
            {
                $this->AccountModel->add(['Fullname' => $fullname,
                                          'Username' => $username,
                                          'Password' => $password]);
                $arr = ['success' => 'true'];
            }
            if($kq)
            {
                $arr = ['success' => 'false'];
            }
        }
        $this->view("auth/register", $arr);
    }
}

?>