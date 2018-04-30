<?php 
    ob_start();
    session_start();
    
    require_once(dirname(__FILE__).'/controller/AuthController.php');

    $controller = new AuthController();
    $controller->getRoute();

    ob_end_flush();
?>