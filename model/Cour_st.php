
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Course_St extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function update_cur_st($cur,$st,$res) {
        $sql = "UPDATE course_student SET task = '{$res}' WHERE student_id = '{$st}' AND  course_id = '{$cur}'";
        $result = $this->conn->query($sql);
        return $result;
    } 

    public function check_exist($cur,$st) {
        $sql = "SELECT * FROM course_student WHERE student_id = '{$st}' AND  course_id = '{$cur}'";
        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        if(count($info) == 0){
            return 0;
        }
        return 1;
    }  


    public function cur_st_store($cur,$st) {
        $sql = "INSERT INTO course_student(course_id, student_id) VALUES ('{$cur}', '{$st}')";

        $result = $this->conn->query($sql);

        return $result;
    }
    
}

?>