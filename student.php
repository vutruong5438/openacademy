<?php 
    ob_start();
    session_start();
    
    require_once(dirname(__FILE__).'/controller/StudentController.php');

    $controller = new StudentController();
    $controller->getRoute();

    ob_end_flush();
?>