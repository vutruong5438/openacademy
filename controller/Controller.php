<?php

class Controller {

    public function __construct() {
        $this->checkLogin();
    }

    public function checkLogin() {

        if (!isset($_SESSION['arUser'])) {
            header("Location:auth.php");
            exit();
        } elseif (isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] == 1) {
            header("Location:admin.php");
            exit();
        }elseif (isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] == 2) {
            header("Location:teacher.php");
            exit();
        } elseif (isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] == 3) {
            header("Location:student.php");
            exit();
        }
    }
  
}

?>