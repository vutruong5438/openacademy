
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Course extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function get_course_data() {
        $sqlu = "SELECT course.id, course.course_name, program.program_name FROM course LEFT JOIN program ON course.program_id = program.id";

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

    public function course_store($request) {
        $sql = "INSERT INTO course(course_name, program_id, body) VALUES ('{$request["course_name"]}', '{$request["program_id"]}', '{$request["body"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }
    
    public function getCourse($id) {
        $sql = "SELECT course.id, course.course_name, course.body, program.program_name, course.program_id FROM course LEFT JOIN program ON course.program_id = program.id WHERE course.id = '{$id}'";

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

    public function course_update($request, $id) {
    
        $sql = "UPDATE course SET course_name = '{$request["course_name"]}', body = '{$request["course-body"]}' WHERE id = '{$id}'";
        
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