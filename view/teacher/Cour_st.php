
<?php

require_once(dirname(__FILE__) . '/Model.php');

class Progr_St extends Model {

    public $conn;

    public function __construct() {
        parent::__construct();
    }

    public function update_cur_st($cur,$st,$res) {
        $sqlu = "UPDATE course_student SET task = '{$res}' WHERE student_id = '{$st}' AND  course_id = '{$cur}'";

        $result = $this->conn->query($sql);

        return $result;
    } 

    public function check_exist($cur,$st) {
        $sqlu = "SELECT * FROM course_student WHERE student_id = '{$st}' AND  course_id = '{$cur}'";

        $result = $this->conn->query($sql);

        return $result;
    }  


    public function cur_st_store($cur,$st) {
        $sql = "INSERT INTO course_student(course_id, student_id) VALUES ('{$cur}', '{$st}')";

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
        $sqlu = "SELECT quizz.id, quizz.course_id, quizz.question, quizz.answer, course.course_name, program.program_name FROM quizz LEFT JOIN course ON quizz.course_id = course.id LEFT JOIN program ON course.id = program.id WHERE quizz.course_id = '{$id}'";

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
        $sql = "DELETE FROM course WHERE id = '{$id}'";

        $result = $this->conn->query($sql);

        return $result;
    }
    
}

?>