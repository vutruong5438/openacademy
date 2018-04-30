<?php 
    ob_start();
    session_start();
    
    require_once(dirname(__FILE__).'/controller/AdminController.php');

    $controller = new AdminController();
    $controller->getRoute();

    ob_end_flush();
?>