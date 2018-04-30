
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Exam extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function get_exam_data() {
        $sqlu = "SELECT exam.id, exam.course_id, exam.question, course.course_name, program.program_name FROM exam LEFT JOIN course ON exam.course_id = course.id LEFT JOIN program ON course.id = program.id ORDER BY program.id";

        $result = $this->conn->query($sqlu);
        $listCourse = array();
        while ($listCourse = mysqli_fetch_assoc($result)) {
            $listCourses[] = $listCourse;
        }

        return $listCourses;
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

    public function get_exam_by_course($id) {
        $sqlu = "SELECT exam.id, exam.course_id, exam.question FROM exam WHERE course_id = '{$id}'";

        $result = $this->conn->query($sqlu);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }  


    public function exam_store($request) {
        $sql = "INSERT INTO exam(course_id, question) VALUES ('{$request["course_id"]}', '{$request["question"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }
    
    public function getExam($id) {
        $sql = "SELECT exam.id, exam.course_id, exam.question, course.course_name, program.program_name FROM exam LEFT JOIN course ON exam.course_id = course.id LEFT JOIN program ON course.id = program.id  WHERE exam.id = '{$id}'";

        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }


    public function exam_update($request, $id) {
    
        $sql = "UPDATE exam SET question = '{$request["question"]}' WHERE id = '{$id}'";
        
        $result = $this->conn->query($sql);
        
        return $result;
    }

    public function exam_io_store($request, $id) {
        $sql = "INSERT INTO in_out_exam (exam_id, input, output) VALUES ('{$id}', '{$request["input"]}', '{$request["output"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function destroy($id) {
        $sql = "DELETE FROM course WHERE id = '{$id}'";

        $result = $this->conn->query($sql);

        return $result;
    }
    
}

?>