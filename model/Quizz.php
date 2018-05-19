
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Quizz extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function get_quizz_data() {
        $sqlu = "SELECT quizz.id, quizz.course_id, quizz.question, quizz.answer, course.course_name, program.program_name FROM quizz LEFT JOIN course ON quizz.course_id = course.id LEFT JOIN program ON course.id = program.id ORDER BY program.id";

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


    public function quizz_store($request) {
        $sql = "INSERT INTO quizz(course_id, question, answer) VALUES ('{$request["course_id"]}', '{$request["question"]}', '{$request["answer"]}')";

        $result = $this->conn->query($sql);

        return $result;
    }
    
    public function getQuizz($id) {
        $sql = "SELECT quizz.id, quizz.course_id, quizz.question, quizz.answer, course.course_name, program.program_name FROM quizz LEFT JOIN course ON quizz.course_id = course.id LEFT JOIN program ON course.id = program.id  WHERE quizz.id = '{$id}'";

        $result = $this->conn->query($sql);
        $info = mysqli_fetch_assoc($result);

        return $info;
    }

    public function getQuizz_by_course($id) {
        // $sqlu = "SELECT quizz.id, quizz.course_id, quizz.question, quizz.answer, course.course_name, program.program_name FROM quizz LEFT JOIN course ON quizz.course_id = course.id LEFT JOIN program ON course.id = program.id WHERE quizz.course_id = '{$id}'";
        $sqlu = "SELECT quizz.id, quizz.course_id, quizz.question, quizz.answer, course.course_name FROM quizz LEFT JOIN course ON quizz.course_id = course.id  WHERE quizz.course_id = '{$id}'";


        $result = $this->conn->query($sqlu);
        $listCourse = array();
        while ($listCourse = mysqli_fetch_assoc($result)) {
            $listCourses[] = $listCourse;
        }

        return $listCourses;
    }

    public function quizz_update($request, $id) {
    
        $sql = "UPDATE quizz SET question = '{$request["question"]}', answer = '{$request["answer"]}' WHERE id = '{$id}'";
        
        $result = $this->conn->query($sql);
        
        return $result;
    }

    public function destroy($id) {
        $sql = "DELETE FROM quizz WHERE id = '{$id}'";

        $result = $this->conn->query($sql);

        return $result;
    }
    
}

?>