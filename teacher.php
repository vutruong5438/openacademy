<?php 
    ob_start();
    session_start();
    
    require_once(dirname(__FILE__).'/controller/TeacherController.php');

    $controller = new TeacherController();
    $controller->getRoute();

    ob_end_flush();
?>