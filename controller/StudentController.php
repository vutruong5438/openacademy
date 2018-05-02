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
        } elseif (isset($_GET['action']) && $_GET['action'] == 'compiler' && isset($_GET['id'])) {
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
        $question = $this->quizz->getQuizz_by_course($id);
        $exam = $this->exam->get_exam_by_course($id);
        require_once(dirname(__FILE__) . '/../view/student/course_render.php');
        return;
    }

    public function compiler() {

        /*var_dump($_SESSION['arUser']);*/
        $id_exam = $_GET['id'];
        $code = $_POST['code'];


        $in_out = $this->exam->get_in_ouy_by_exam($id_exam);
        $result = count($in_out);
        $check = 0;

        foreach ($in_out as $value) {
            $output = $this->check_code($value["input"], $code);
            
           

            if ($output == $value["output"]){
                $check += 1;
            }
           
        }
        if ($check == $result) {
            echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Thành công!</strong> Code này không có lỗi.
            </div>';
            //input code
        } else {
             echo '<div class="alert alert-danger alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Thất bại!</strong> Code có lỗi, vui lòng kiểm tra lại
</div>';
        }
    }
    protected function check_code($in, $co) {
        putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
        $CC="g++";
        $out="a.exe";
        $code=$co;
        $input=$in;
        $filename_code="main.cpp";
        $filename_in="input.txt";
        $filename_error="error.txt";
        $executable="a.exe";
        $command=$CC." -lm ".$filename_code;    
        $command_error=$command." 2>".$filename_error;
        $output = null;

        //if(trim($code)=="")
        //die("The code area is empty");
        
        $file_code=fopen($filename_code,"w+");
        fwrite($file_code,$code);
        fclose($file_code);
        $file_in=fopen($filename_in,"w+");
        fwrite($file_in,$input);
        fclose($file_in);
        exec("cacls  $executable /g everyone:f"); 
        exec("cacls  $filename_error /g everyone:f");   

        shell_exec($command_error);
        $error=file_get_contents($filename_error);

        if(trim($error)=="")
        {
            if(trim($input)=="")
            {
                $output=shell_exec($out);
            }
            else
            {
                $out=$out." < ".$filename_in;
                $output=shell_exec($out);
            }
            //echo "<pre>$output</pre>";
            // echo "$output";
                  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
        }
        else if(!strpos($error,"error"))
        {
            // echo "<pre>$error</pre>";
            if(trim($input)=="")
            {
                $output=shell_exec($out);
            }
            else
            {
                $out=$out." < ".$filename_in;
                $output=shell_exec($out);
            }
            // echo "$output";
                            //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
        }
        else
        {
            // echo "<pre>$error</pre>";
            $output = $error;
        }
        exec("del $filename_code");
        exec("del *.o");
        exec("del *.txt");
        exec("del $executable");
        return $output;
    }


}

?>