<?php
require_once "./mvc/models/MyModels.php";
class AccountModels extends MyModels {
    protected $table = "Users";

    public function __construct() {
        $this->conn = $this->getConnection();
    }
    
    public function login($data) {
        $kq = $this->findUsername($data['username']);
        if($kq) {
            if (password_verify($data['password'], $kq['password'])) {
                if($kq['role_id'] == "1") {
                    $_SESSION['role'] = 'admin';
                    $_SESSION['user_id'] = $kq['id'];
                } else if($kq['role_id'] == 2) {
                    $_SESSION['role'] = 'user';
                    $_SESSION['user_id'] = $kq['id'];
                }
                return true;
            }
            return false;
        }
        return false;
    }

    public function register($data) {
        $existingUser = $this->findUsername($data['username']);
        if ($existingUser) {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'User already exists',
                )
            );
        }
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $keys = array_keys($data);
        $keys = implode(", ", $keys);
        $newValues = array_map(function($value) { return "'".$value."'"; }, array_values($data));
        $newValues = implode(", ", $newValues);
        $sql = "INSERT INTO $this->table ($keys) VALUES ($newValues)";
        $query = $this->conn->prepare($sql);
        if ($query->execute()) {
            return json_encode(
                array(
                    'type'      => 'success',
                    'Message'   => 'Insert data success',
                    'id'        => $this->conn->lastInsertId()
                )
            );
        } else {
            return json_encode(
                array(
                    'type'      => 'fail',
                    'Message'   => 'Insert data fails',
                    'err'       => 'Sever error'
                )
            );
        }
    }
    
    private function findUsername($username) {
        $sql = "SELECT * FROM $this->table WHERE username = :username";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':username', $username);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>