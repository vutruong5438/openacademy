<?php

require_once(dirname(__FILE__) . '/Controller.php');
require_once(dirname(__FILE__) . '/../model/Course.php');
require_once(dirname(__FILE__) . '/../model/Program.php');
require_once(dirname(__FILE__) . '/../model/Quizz.php');
require_once(dirname(__FILE__) . '/../model/Exam.php');

class StudentController extends Controller {

    protected $user;

    function __construct() {
        if (!(isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] ==  3)) {
            header("Location:index.php");
            exit();
        }
        $this->course = new Course();
        $this->prog = new Program();
        $this->quizz = new Quizz();
        $this->exam = new Exam();
    }

    public function getRoute() {
        if (isset($_GET['action']) && $_GET['action'] == 'destroy' && isset($_GET['ten_dang_nhap'])) {
            $this->destroy();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'viewprogram') {
            $this->get_program_data();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'viewcours' && isset($_GET['id'])) {
            $this->view_course_by_program();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'course_render' && isset($_GET['id'])) {
            $this->course_render();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'compiler') {
            $this->compiler();
        } else {
            $this->index();
        }
    }
    public function get_program_data() {
        $listprogram = $this->course->get_program_data();
        require_once(dirname(__FILE__) . '/../view/student/view_program.php');
        return;
    }

    public function index() {
        // $listUser = $this->user->getData();
        require_once(dirname(__FILE__) . '/../view/student/index.php');
        return;
    }


    public function view_course_by_program() {
        $id = $_GET['id'];
        // $prog_name = $_GET['program_name'];
        $list = $this->course->view_course_by_program($id);

        require_once(dirname(__FILE__) . '/../view/student/view_course.php');
        return;
    }
    public function course_render() {
        $id = $_GET['id'];

        $data_render = $this->course->data_render($id);
        $exam = $this->exam->get_exam_by_course($id);
        require_once(dirname(__FILE__) . '/../view/student/course_render.php');
        return;
    }
    

}

?>