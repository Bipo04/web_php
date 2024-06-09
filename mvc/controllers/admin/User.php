<?php
class User extends Controller {
    public $UserModel;

    public function __construct() {
        $this->UserModel = $this->model('UserModels');
    }

    public function index() {
        if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == '1') {
            $select =   ['Users.id', 'fullname', 'username', 'email',
                        'phone_number', 'address', 'Roles.name', 'created_at'];
            $users = $this->UserModel->selectJoin($select ,null, null, 'Roles', ['role_id', 'id'], 'INNER');
            
            $this->view('layouts/admin_layout', [
                'page' => 'user/index',
                'title' => 'Danh sách người dùng',
                'users' => $users,
                "type" => "qli",
            ]);
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    // public function add() {
    //     if(isset($_POST['btn'])) {
    //         $req = new Request();
    //         unset($_POST['btn']);
    //         $data = $req->postFields();
    //         $this->UserModel->add($data);
    //         header('location: http://localhost:8088/web/admin/supply');
    //     }

    //     $this->view('layouts/admin_layout', [
    //         'page' => 'user/add',
    //         'title' => 'Thêm tài khoản',
    //         'type' => 'qli',
    //     ]);
    // }

    public function update() {
        if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == '1') {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $role = strtolower($_POST['role']);
                $query = "EXEC updateUser ".$id.", '".$role."'";
                echo $query;
                $this->UserModel->queryExecute($query);
            }
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }

    public function delete() {
        if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == '1') {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $req = new Request();
                $data = $req->postFields();
                $id = $data['id'];
                $this->CategoryModel->deleteById($id);
            }
        } else {
            require_once './mvc/errors/forbidden.php';
        }
    }
}
?>