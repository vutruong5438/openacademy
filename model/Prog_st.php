
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

        $info = mysqli_fetch_assoc($result);

        if(count($info) == 0){
            return 0;
        }
        return 1;
    }
    public function get_pro_messg($prog,$st) {
        $sql = "SELECT * FROM prog_student WHERE student_id = '{$st}' AND  program_id = '{$prog}'";
        $result = $this->conn->query($sql);

        $info = mysqli_fetch_assoc($result);

        return $info;
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