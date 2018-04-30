<?php

require_once(dirname(__FILE__) . '/Controller.php');
require_once(dirname(__FILE__) . '/../model/Users.php');

class AuthController extends Controller {

    protected $auth;

    function __construct() {
        $this->auth = new User();
    }

    public function getRoute() {
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            $this->logout();
        }elseif (isset($_GET['action']) && $_GET['action'] == 'postLogin') {
            $this->postLogin();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'register') {
            # code...
            $this->register();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'login') {
            $this->login();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'create') {
            $this->create();
        }else {
            $this->login();
        }
    }

    public function login() {
        include 'view/auth/page-login.php';
        return;
    }

    public function register() {
        include 'view/auth/page-register.php';
        return;
    }

    public function postLogin() {
        $request = $_POST;
        $arUser = $this->auth->login($request);

        if (count($arUser) > 0) {
            $_SESSION['arUser'] = $arUser;
        }
        header("Location:index.php");
        exit();
        return;
    }

     public function create() {
        $request = $_POST;
        $arUser = $this->auth->store($request);

        if ($arUser) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:index.php");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:index.php");
        }
        return;

        // header("Location:index.php");
        // exit();
        // return;
    }

    public function logout() {
        if(isset($_SESSION['arUser'])){
            unset($_SESSION['arUser']);
        }
        header("Location:index.php");
    }
}
