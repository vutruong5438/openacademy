
<?php

require_once(dirname(__FILE__) . '/Model.php');

class program extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function get_prog_data() {
        $sqlu = "SELECT program.id, program.program_name, program.date_create, program.detail, program.user_id, users.fullname FROM program LEFT JOIN users ON program.user_id = users.id";

        $result = $this->conn->query($sqlu);
        $listCourse = array();

        while ($listCourse = mysqli_fetch_assoc($result)) {
            $listCourses[] = $listCourse;
        }

        return $listCourses;
    }  


    public function get_program_data() {
        $sqlu = "SELECT * FROM program";

        $result = $this->conn->query($sqlu);
        $listProgram = array();

        while ($listProgram = mysqli_fetch_assoc($result)) {
            $listPrograms[] = $listProgram;
        }

        return $listPrograms;
    }  

    public function store($request) {
        $sql = "INSERT INTO program(program_name, code, user_id, detail) VALUES ('{$request["program_name"]}', '{$request["code"]}', '{$request["user_id"]}', '{$request["detail"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }
    
    public function getProgram($id) {
        $sql = "SELECT program.id, program.program_name, program.date_create, program.code, program.detail, program.user_id, users.fullname FROM program LEFT JOIN users ON program.user_id = users.id WHERE program.id = '{$id}'";

        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }

     public function view_course_by_program($id) {
        $sql = "SELECT course.id, course.course_name, course.body, program.program_name, course.program_id FROM course LEFT JOIN program ON course.program_id = program.id WHERE program.id = '{$id}'";

        $result = $this->conn->query($sql);
        $listProgram = array();

        while ($listProgram = mysqli_fetch_assoc($result)) {
            $listPrograms[] = $listProgram;
        }

        return $listPrograms;
    }  

    public function data_render($id) {
        $sql = "SELECT course.id, course.course_name, course.body, program.program_name, course.program_id FROM course LEFT JOIN program ON course.program_id = program.id WHERE course.id = '{$id}'";

        
        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }

    public function prog_update($request, $id) {
    
        $sql = "UPDATE program SET program_name = '{$request["program_name"]}', code = '{$request["code-body"]}', date_create = '{$request["date_create"]}', user_id = '{$request["user_id"]}', date_create = '{$request["detail"]}' WHERE id = '{$id}'";
        
        $result = $this->conn->query($sql);
        
        return $result;
    }

    public function destroy($id) {
        $sql = "DELETE FROM course WHERE id = '{$id}'";

        $result = $this->conn->query($sql);

        return $result;
    }
    
    
    public function checkCourse_name($name, $id) {
        $sql = "SELECT * FROM course WHERE course_name = '{$name}' AND id != {$id}";

        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        if(count($info) == 0){
            return 0;
        }
        return 1;
    }
}

?>