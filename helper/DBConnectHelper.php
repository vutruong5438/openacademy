<?php
/**
* 
*/

class DBConnectHelper
{
    protected $conn;
	
    public function __construct()
    {
        $this->conn = new mysqli('localhost','root',"",'academy');
    	$this->conn->set_charset("utf8");
    	if(mysqli_connect_errno()){
                echo "Có lỗi trong quá trình kết nối database <br />".mysqli_connect_error();
                exit();
	    }
    }
}
	
?>