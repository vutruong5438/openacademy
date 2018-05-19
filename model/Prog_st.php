
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Progr_St extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function check_exist($prog,$st) {
        $sql = "SELECT * FROM prog_student WHERE student_id = '{$st}' AND  program_id = '{$prog}'";
        $result = $this->conn->query($sql);

        $total_row = $result->num_rows;

        if($total_row > 0){
            return 1;
        } else {
            return 0;
        }
        
    }
    public function check_access($prog,$st) {
        $sql = "SELECT * FROM prog_student WHERE student_id = '{$st}' AND  program_id = '{$prog}' AND approve = 1";
        $result = $this->conn->query($sql);
        $total_row = $result->num_rows;

        if($total_row > 0){
            return 1;
        } else {
            return 0;
        }
    }

    public function get_pro_messg($prog,$st) {
        $sql = "SELECT * FROM prog_student WHERE student_id = '{$st}' AND  program_id = '{$prog}'";
        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        return $info;
    }

    public function getmessg($user) {
        $query = "SELECT * FROM prog_student WHERE user_id = '{$user}' AND approve = 0";

        $statement = $this->conn->query($query);
        $total_row = $statement->num_rows;
        
        $output = '';
        if($total_row > 0){
            $listCourse = array();
            while ($listCourse = mysqli_fetch_assoc($statement)) {
                $listCourses[] = $listCourse;
            }
            foreach($listCourses as $row) {
               $output .= '
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <i class="fa fa-check"></i>
                            <p>'.$row["body"].'.</p>
                        </a>
                       ';
            }
        } else {
            $output .= '
                <a href="#" class="dropdown-item media bg-flat-color-1">No Notification Found</a>
            ';
        }
        $data = array(
           'notification'   => $output,
           'unseen_notification' => $total_row
        );

        return json_encode($data);
    }

    public function store_prog_st($prog,$st) {
        $sql = "INSERT INTO prog_student(student_id, program_id) VALUES ('{$st}', '{$prog}')";
        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);
        return $info;
    } 
    public function update_prog_mesg($id, $sub, $body, $user) {
        $sql = "UPDATE prog_student SET subject = '{$sub}', body = '{$body}', user_id = '{$user}' WHERE id = '{$id}'";
        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);
        return $info;
    } 

    public function get_prog_st_data($prog,$st) {
        $sql = "SELECT * FROM prog_student WHERE student_id = '{$st}' AND  program_id = '{$prog}'";
        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }
    public function get_wait_prog_data($user) {
        $sql = "SELECT prog_student.student_id, prog_student.id, prog_student.program_id, program.program_name, users.fullname FROM prog_student INNER JOIN program ON prog_student.program_id = program.id INNER JOIN users ON prog_student.student_id = users.id WHERE prog_student.user_id = '{$user}' AND prog_student.approve = 0";
        $result = $this->conn->query($sql);
        $total_row = $result->num_rows;
        if($total_row > 0){
            $listCourse = array();
            while ($listCourse = mysqli_fetch_assoc($result)) {
                $listCourses[] = $listCourse;
            }
            return $listCourses;
        } else {
            return 0;
        }
    }

    public function accecpt_prog($id) {
        $sql = "UPDATE prog_student SET approve = 1 WHERE id = '{$id}'";
        $result = $this->conn->query($sql);
        
        return $result;
    } 



    
}

?>