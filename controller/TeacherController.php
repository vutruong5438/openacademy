<?php

require_once(dirname(__FILE__) . '/Controller.php');
require_once(dirname(__FILE__) . '/../model/Course.php');
require_once(dirname(__FILE__) . '/../model/Program.php');
require_once(dirname(__FILE__) . '/../model/Quizz.php');
require_once(dirname(__FILE__) . '/../model/Exam.php');

class TeacherController extends Controller {

    protected $user;

    function __construct() {
        if (!(isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] == 2)) {
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
        } elseif (isset($_GET['action']) && $_GET['action'] == 'view_program') {
            $this->get_prog_data();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'viewcourse') {
            $this->get_course_data();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'course_add') {
            $this->course_add();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'course_store') {
            $this->course_store();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'course_edit' && isset($_GET['id'])) {
            $this->course_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'course_update' && isset($_GET['id'])) {
            $this->course_update();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'view_quizz') {
            $this->get_quizz_data();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'quizz_add') {
            $this->quizz_add();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'quizz_store') {
            $this->quizz_store();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'quizz_edit' && isset($_GET['id'])) {
            $this->quizz_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'quizz_update' && isset($_GET['id'])) {
            $this->quizz_update();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'view_exam') {
            $this->get_exam_data();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_add') {
            $this->exam_add();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_store') {
            $this->exam_store();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_edit' && isset($_GET['id'])) {
            $this->exam_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_update' && isset($_GET['id'])) {
            $this->exam_update();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_io_add' && isset($_GET['id'])) {
            $this->exam_io_add();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'exam_io_store' && isset($_GET['id'])) {
            $this->exam_io_store();
        } else {
            $this->index();
        }
    }
    public function get_course_data() {
        $listcours = $this->course->get_course_data();
        require_once(dirname(__FILE__) . '/../view/teacher/course.php');
        return;
    }
    public function get_prog_data() {
        $listprogs = $this->prog->get_prog_data();
        require_once(dirname(__FILE__) . '/../view/teacher/program.php');
        return;
    }

    public function index() {
        // $listUser = $this->user->getData();
        require_once(dirname(__FILE__) . '/../view/teacher/index.php');
        return;
    }

    // public function create() {
    //     require_once(dirname(__FILE__) . '/../view/teacher/create.php');
    //     return;
    // }

    // public function store() {
    //     $request = $_POST;
        
    //     $kiemTra = $this->user->kiemTraUsername($request['ten_dang_nhap']);
    //     if($kiemTra){
    //         $_SESSION['danger'] = 'Đã trùng tên đăng nhập, vui lòng chọn tên khác';
    //         header("Location:user.php");exit();
    //     }
    //     $result = $this->user->store($request);

    //     if ($result) {
    //         $_SESSION['success'] = 'Đã thêm thành công';
    //         header("Location:user.php");
    //     } else {
    //         $_SESSION['danger'] = 'Có lỗi khi thêm';
    //         header("Location:user.php");
    //     }
    //     return;
    // }

    // public function edit() {
    //     $id_user = $_GET['id_user'];

    //     $infoUser = $this->user->getUser($id_user);

    //     require_once(dirname(__FILE__) . '/../view/teacher/edit.php');
    //     return;
    // }


    public function course_edit() {
        $id = $_GET['id'];

        $infoUser = $this->course->getCourse($id);

        require_once(dirname(__FILE__) . '/../view/teacher/course_edit.php');
        return;
    }

    public function course_update() {
        $id = $_GET['id'];
        $request = $_POST;
        $kiemTra = $this->course->checkCourse_name($request['course_name'], $id);

        if($kiemTra){
            $_SESSION['danger'] = 'Course have exist';
            header("Location: teacher.php?action=viewcourse");
            exit();
        }
        
        $result = $this->course->course_update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: teacher.php?action=viewcourse");
            exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: teacher.php?action=viewcourse");
            exit();
        }
        return;
    }

    public function course_add() {
        $listprogs = $this->prog->get_prog_data();
        require_once(dirname(__FILE__) . '/../view/teacher/course_add.php');
        return;
    }

    public function course_store() {
        $request = $_POST;
        $result = $this->course->course_store($request);

        if ($result) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:teacher.php?action=viewcourse");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:teacher.php?action=viewcourse");
        }
        return;
    }

    // Quizzz

    public function get_quizz_data() {
        $listquizz = $this->quizz->get_quizz_data();
        require_once(dirname(__FILE__) . '/../view/teacher/quizz.php');
        return;
    }

    public function quizz_edit() {
        $id = $_GET['id'];

        $infoQuizz = $this->quizz->getQuizz($id);

        require_once(dirname(__FILE__) . '/../view/teacher/quizz_edit.php');
        return;
    }

    public function quizz_update() {
        $id = $_GET['id'];
        $request = $_POST;
        
        $result = $this->quizz->quizz_update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: teacher.php?action=view_quizz");
            exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: teacher.php?action=view_quizz");
            exit();
        }
        return;
    }

    public function quizz_add() {
        $listcours = $this->quizz->get_course_data();
        require_once(dirname(__FILE__) . '/../view/teacher/quizz_add.php');
        return;
    }

    public function quizz_store() {
        $request = $_POST;
        $result = $this->quizz->quizz_store($request);

        if ($result) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:teacher.php?action=view_quizz");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:teacher.php?action=view_quizz");
        }
        return;
    }


    // Exam

    public function get_exam_data() {
        $listquizz = $this->exam->get_exam_data();
        require_once(dirname(__FILE__) . '/../view/teacher/exam.php');
        return;
    }

    public function exam_edit() {
        $id = $_GET['id'];

        $infoQuizz = $this->exam->getExam($id);

        require_once(dirname(__FILE__) . '/../view/teacher/exam_edit.php');
        return;
    }
    public function exam_io_add() {
        $id = $_GET['id'];

        $infoQuizz = $this->exam->getExam($id);

        require_once(dirname(__FILE__) . '/../view/teacher/exam_io_add.php');
        return;
    }

    public function exam_update() {
        $id = $_GET['id'];
        $request = $_POST;
        
        $result = $this->exam->exam_update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: teacher.php?action=view_exam");
            exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: teacher.php?action=view_exam");
            exit();
        }
        return;
    }

    public function exam_io_store() {
        $id = $_GET['id'];
        $request = $_POST;
        
        $result = $this->exam->exam_io_store($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã them thành công';
            header("Location: teacher.php?action=view_exam");
            exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: teacher.php?action=view_exam");
            exit();
        }
        return;
    }
    

    public function exam_add() {
        $listcours = $this->exam->get_course_data();
        require_once(dirname(__FILE__) . '/../view/teacher/exam_add.php');
        return;
    }

    public function exam_store() {
        $request = $_POST;
        $result = $this->exam->exam_store($request);

        if ($result) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:teacher.php?action=view_exam");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:teacher.php?action=view_exam");
        }
        return;
    }




    public function destroy() {
        $ten_dang_nhap = $_GET['id'];

        $result = $this->user->destroy($ten_dang_nhap);

        if ($result) {
            $_SESSION['success'] = 'Đã xóa thành công';
            header("Location: teacher.php?action=viewcourse");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi xóa';
            header("Location: teacher.php?action=viewcourse");
        }
        return;
    }

}

?>