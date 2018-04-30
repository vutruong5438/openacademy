
<?php

require_once(dirname(__FILE__) . '/Model.php');

class User extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function getData() {
        if (!isset($_GET['fullname'])) {
            $_GET['fullname'] = '';
        }
        if (!isset($_GET['level'])) {
            $_GET['level'] = '';
        }
        $sqlu = "SELECT * FROM users WHERE fullname LIKE '%{$_GET['fullname']}%' AND level LIKE '%{$_GET['level']}%'";

        $result = $this->conn->query($sqlu);
        $listUser = array();

        while ($arUser = mysqli_fetch_assoc($result)) {
            $listUser[] = $arUser;
        }

        return $listUser;
    }

    public function store($request) {
        // $level = (int)$$request["level"];
        $sql = "INSERT INTO users(username, password, fullname, email, level) VALUES ('{$request["username"]}', '{$request["password"]}', '{$request["fullname"]}', '{$request["email"]}', '{$request["level"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function getUser($id_user) {
        $sql = "SELECT * FROM users WHERE id = '{$id_user}'";

        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        return $info;
    }

    public function getbylevel($level) {
        $sqlu = "SELECT * FROM users WHERE level = '{$level}'";

        $result = $this->conn->query($sqlu);
        $listUser = array();

        while ($arUser = mysqli_fetch_assoc($result)) {
            $listUser[] = $arUser;
        }

        return $listUser;
    }

    public function update($request, $id) {
        $sql = "UPDATE users SET password = '{$request["password"]}', fullname = '{$request["fullname"]}', email = '{$request["email"]}' WHERE id = '{$id}'";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function destroy($id_user) {
        $sql = "DELETE FROM users WHERE id = '{$id_user}'";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function login($request) {
        $username = $request['username'];
        $password = $request['password'];
        $sql = "SELECT * FROM users WHERE username = '{$username}' && password = '{$password}' LIMIT 1";

        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        return $info;
    }
    
    
    public function kiemTraUsername($username){
        $sql = "SELECT * FROM users WHERE username = '{$username}'";

        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        if(count($info) == 0){
            return 0;
        }
        return 1;
    }
    
    public function kiemTraUsernameEdit($username, $id_user){
        $sql = "SELECT * FROM user WHERE username = '{$username}' AND id != {$id_user}";

        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        if(count($info) == 0){
            return 0;
        }
        return 1;
    }

}

?>