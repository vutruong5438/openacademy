<?php

require_once(dirname(__FILE__) . '/Controller.php');
require_once(dirname(__FILE__) . '/../model/Users.php');
require_once(dirname(__FILE__) . '/../model/Program.php');

class AdminController extends Controller {

    protected $user;

    function __construct() {
        if (!(isset($_SESSION['arUser']) && $_SESSION['arUser']['level'] == 1)) {
            header("Location:index.php");
            exit();
        }
        $this->user = new User();
        $this->prog = new Program();

    }

    public function getRoute() {
        if (isset($_GET['action']) && $_GET['action'] == 'view_prog') {
            $this->view_prog();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'prog_add') {
            $this->prog_add();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'prog_edit') {
            $this->prog_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'prog_store') {
            $this->prog_store();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'teachers') {
            $this->teachers();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'teacher_edit' && isset($_GET['id'])) {
            $this->teacher_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'teacher_update' && isset($_GET['id'])) {
            $this->teacher_update();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'students') {
            $this->students();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'student_edit' && isset($_GET['id'])) {
            $this->student_edit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'student_update' && isset($_GET['id'])) {
            $this->student_update();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'destroy_st' && isset($_GET['id'])) {
            $this->destroy_st();
        } else {
            $this->index();
        }
    }
    public function teachers() {
        $level = 2;
        $listTeacher = $this->user->getbylevel($level);

        require_once(dirname(__FILE__) . '/../view/admin/teachers.php');
        return;
    }

    public function students() {
        $level = 3;
        $listStudent = $this->user->getbylevel($level);

        require_once(dirname(__FILE__) . '/../view/admin/students.php');
        return;
    }

    public function index() {
        $listUser = $this->user->getData();
        require_once(dirname(__FILE__) . '/../view/admin/index.php');
        return;
    }

    // public function create() {
    //     require_once(dirname(__FILE__) . '/../view/user/create.php');
    //     return;
    // }

    public function store() {
        $request = $_POST;
        
        $kiemTra = $this->user->kiemTraUsername($request['ten_dang_nhap']);
        if($kiemTra){
            $_SESSION['danger'] = 'Đã trùng tên đăng nhập, vui lòng chọn tên khác';
            header("Location:user.php");exit();
        }
        $result = $this->user->store($request);

        if ($result) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:user.php");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:user.php");
        }
        return;
    }

    public function teacher_edit() {
        $id_user = $_GET['id'];

        $infoUser = $this->user->getUser($id_user);

        require_once(dirname(__FILE__) . '/../view/admin/teacher_edit.php');
        return;
    }

    public function student_edit() {
        $id_user = $_GET['id'];

        $infoUser = $this->user->getUser($id_user);

        require_once(dirname(__FILE__) . '/../view/admin/student_edit.php');
        return;
    }

    public function teacher_update() {
        $id = $_GET['id'];

        $request = $_POST;
       
        // $kiemTra = $this->user->kiemTraUsernameEdit($request['ten_dang_nhap'], $id_user);

        // if($kiemTra){
        //     $_SESSION['danger'] = 'Đã trùng tên đăng nhập, vui lòng chọn tên khác';
        //     header("Location:user.php");exit();
        // }
        
        $result = $this->user->update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: admin.php?action=teachers");
             exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: admin.php?action=teachers");
             exit();
        }
        return;
    }

    public function student_update() {
        $id = $_GET['id'];
        $request = $_POST;
        $result = $this->user->update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: admin.php?action=students");
             exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: admin.php?action=students");
             exit();
        }
        return;
    }

    public function destroy_tc() {
        $id = $_GET['id'];

        $result = $this->user->destroy($id);

        if ($result) {
            $_SESSION['success'] = 'Đã xóa thành công';
            header("Location:admin.php?action=teachers");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi xóa';
            header("Location:admin.php?action=teachers");
        }
        return;
    }

    public function destroy_st() {
        $id = $_GET['id'];

        $result = $this->user->destroy($id);

        if ($result) {
            $_SESSION['success'] = 'Đã xóa thành công';
            header("Location:admin.php?action=students");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi xóa';
            header("Location:admin.php?action=students");
        }
        return;
    }

    public function view_prog() {
        $listProg = $this->prog->get_prog_data();

        require_once(dirname(__FILE__) . '/../view/admin/programs.php');
        return;
    }

    public function prog_add() {
        $level = 2;
        $listTeacher = $this->user->getbylevel($level);

        require_once(dirname(__FILE__) . '/../view/admin/prog_add.php');
        return;
    }

     public function prog_store() {
        $request = $_POST;
        $result = $this->prog->store($request);

        if ($result) {
            $_SESSION['success'] = 'Đã thêm thành công';
            header("Location:admin.php?action=view_prog");
        } else {
            $_SESSION['danger'] = 'Có lỗi khi thêm';
            header("Location:admin.php?action=view_prog");
        }
        return;
    }

    public function prog_edit() {
        $id = $_GET['id'];
        $level = 2;
        $listTeacher = $this->user->getbylevel($level);
        $infoUser = $this->prog->getProgram($id);

        require_once(dirname(__FILE__) . '/../view/admin/prog_edit.php');
        return;
    }

    public function prog_update() {
        $id = $_GET['id'];
        $request = $_POST;
        
        $result = $this->prog->prog_update($request, $id);

        if ($result) {
            $_SESSION['success'] = 'Đã sửa thành công';
            header("Location: admin.php?action=view_prog");
             exit();
        } else {
            $_SESSION['danger'] = 'Có lỗi khi sửa';
            header("Location: admin.php?action=view_prog");
             exit();
        }
        return;
    }


}

?>