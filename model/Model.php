<?php  

require_once(dirname(__FILE__).'/../helper/DBConnectHelper.php');

class Model extends DBConnectHelper
{
    protected $conn;

    public function __construct()
    {
        parent::__construct();
    }
}

?>