<?php

require_once(dirname(__FILE__) . '/Controller.php');
require_once(dirname(__FILE__) . '/../model/Course.php');
require_once(dirname(__FILE__) . '/../model/Program.php');
require_once(dirname(__FILE__) . '/../model/Quizz.php');
require_once(dirname(__FILE__) . '/../model/Exam.php');
require_once(dirname(__FILE__) . '/../model/Prog_st.php');
require_once(dirname(__FILE__) . '/../model/Cour_st.php');

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
        $this->prog_st = new Progr_St();
        $this->cour_st = new Course_St();
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
        } elseif (isset($_GET['action']) && $_GET['action'] == 'submit' && isset($_GET['id'])) {
            $this->submit();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'enjoy_prog' && isset($_GET['id'])) {
            $this->enjoy_prog();
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
        
        $check_access = $this->prog_st->check_access($id, $_SESSION['arUser']['id']);
        if ($check_access == 1){
            $listcourse = $this->course->view_course_by_program($id, $_SESSION['arUser']['id']);
            // $list = $this->course->view_course_by_program($id, $_SESSION['arUser']['id']);
            foreach ($listcourse as $course) {
                $check = $this->cour_st->check_exist($course['id'], $_SESSION['arUser']['id']);
                if ($check == 0) {
                    $s = $this->cour_st->cur_st_store($course['id'], $_SESSION['arUser']['id']);
                }
            }
            require_once(dirname(__FILE__) . '/../view/student/view_course.php');
            return;
        } else {
            $_SESSION['refuse'] = "True";
            header("Location: student.php?action=viewprogram");
        }
        
    }
    public function course_render() {
        $id = $_GET['id'];

        $data_render = $this->course->data_render($id);
        $question = $this->quizz->getQuizz_by_course($id);
        // var_dump($question);
        $exam = $this->exam->get_exam_by_course($id);
        require_once(dirname(__FILE__) . '/../view/student/course_render.php');
        return;
    }

    public function enjoy_prog() {
        $id = $_GET['id'];
        
        $prog = $this->prog->getProgram($id);
        
        $check = $this->prog_st->check_exist($id, $_SESSION['arUser']['id']);
        if ($check == 0) {
                $prog_st_enjoy = $this->prog_st->store_prog_st($id, $_SESSION['arUser']['id']);
                $prog_megs = $this->prog_st->get_pro_messg($id, $_SESSION['arUser']['id']);
                $subject = "{$_SESSION['arUser']['fullname']} waiting accept to  {$prog['program_name']}";
                $body = "{$_SESSION['arUser']['fullname']} waiting accept to  {$prog['program_name']}";
                // Create notification
                $noti = $this->prog_st->update_prog_mesg($prog_megs['id'],$subject,$body, $prog['user_id']);
                $_SESSION['enjoy_prog'] = "Đã gởi yêu cầu tham gia khóa học {$prog['program_name']} <br/> Vui lòng chờ {$prog['fullname']} chấp nhận yêu cầu này của bạn.";
                header("Location: student.php?action=viewprogram");
            }
        else {
            $prog_st = $this->prog_st->get_prog_st_data($id, $_SESSION['arUser']['id']);
            if ($prog_st['approve'] == 1) {
                $_SESSION['enjoy_prog'] = "Bạn đã tham gia vào khóa học này.";
                header("Location: student.php?action=viewprogram");
            }else {
                 $_SESSION['enjoy_prog'] = "Đã gởi yêu cầu tham gia khóa học {$prog['program_name']} <br/> Vui lòng chờ {$prog['fullname']} châ[s nhận yêu cầu này của bạn.";
                header("Location: student.php?action=viewprogram");
            }
        }
        require_once(dirname(__FILE__) . '/../view/student/course_render.php');
        return;
    }

    public function submit() {
        $id_course = $_GET['id'];
        $questions = $this->quizz->getQuizz_by_course($id_course);
        $exam = $this->exam->get_exam_by_course($id_course);
        $len_quiz = count($questions);
        $temp = 0;
        foreach ($questions as $question) {
            $id = "quizz{$question['id']}";
            if ($_POST[$id]){
                $quiz = $_POST[$id];
                if ($quiz == $question['answer']){
                    $temp += 1;
                }           
            }
            
        }
        $code = 0;
        $id_exam = $_GET['exam'];
        $code = $_POST['code'];
        $in_out = $this->exam->get_in_ouy_by_exam($id_exam);
        $len_io = count($in_out);
        $check = 0;

        foreach ($in_out as $value) {
            $output = $this->check_code($value["input"], $code);
            
           var_dump($output);

            if ($output == $value["output"]){
                $check += 1;
            }
           
        }
        if ($check == $len_io) {
            $code += 30 ;
            //input code
        }
        $result = $code + floor(70*($temp/$len_quiz));

        $res = $this->cour_st->update_cur_st($id_course, $_SESSION['arUser']['id'], $result);
        $prog_id = $this->course->get_program_id($id_course);
        header("Location: student.php?action=viewcours&id={$prog_id}");
        // require_once(dirname(__FILE__) . '/../view/student/view_course.php');
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

            // var_dump(trim($output));
            // var_dump($value["output"]);
            // var_dump(strcasecmp(rtrim($output), $value["output"]) == 0);
            if (strcasecmp(rtrim($output), $value["output"]) == 0){
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
        $CC="g++";
        $out="timeout 5s ./a.out";
        $code=$_POST["code"];
        $input=$_POST["input"];
        $filename_code="main.cpp";
        $filename_in="input.txt";
        $filename_error="error.txt";
        $executable="a.out";
        $command=$CC." -lm ".$filename_code;    
        $command_error=$command." 2>".$filename_error;
        $check=0;

        //if(trim($code)=="")
        //die("The code area is empty");
        
        $file_code=fopen($filename_code,"w+");
        fwrite($file_code,$code);
        fclose($file_code);
        $file_in=fopen($filename_in,"w+");
        fwrite($file_in,$input);
        fclose($file_in);
        exec("chmod -R 777 $filename_in");
        exec("chmod -R 777 $filename_code");  
        exec("chmod 777 $filename_error");  

        shell_exec($command_error);
        exec("chmod -R 777 $executable");
        $error=file_get_contents($filename_error);
        $executionStartTime = microtime(true);

        if(trim($error)=="")
        {
            if(trim($input)=="")
            {
                $output=shell_exec($out);
            }
            else
            {
                $out=$out."<".$filename_in;
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
                $out=$out."<".$filename_in;
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
        exec("rm $filename_code");
        exec("rm *.o");
        exec("rm *.txt");
        exec("rm $executable"); 
        // return (int)$output;
        return $output;
    }


}

?>