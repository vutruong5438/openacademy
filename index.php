<?php 
    ob_start();
    session_start();
    
    require_once(dirname(__FILE__).'/controller/Controller.php');

    $controller = new Controller();

    ob_end_flush();
?>