<?php
class User extends Controller {
    public $UserModel;

    public function __construct() {
        $this->UserModel = $this->model('UserModels');
    }

    public function index() {
        $users = $this->UserModel->selectJoin(['*'], null, 'Roles', ['role_id', 'id'], 'INNER');
        
        $this->view('layouts/admin_layout', [
            'page' => 'user/index',
            'title' => 'Danh sách người dùng',
            'users' => $users,
        ]);
    }
}
?>