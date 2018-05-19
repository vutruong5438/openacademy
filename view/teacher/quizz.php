<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Quản lý Câu hỏi</h1>
                    </div>
                    <?php 
                if (isset($_SESSION['success'])) {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }
                if (isset($_SESSION['danger'])) {
                        echo $_SESSION['danger'];
                        unset($_SESSION['danger']);
                    } 
            ?>
                </div>

            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách</strong>
                            <a type="button" class="btn btn-outline-primary btn-sm float-right" href="teacher.php?action=quizz_add">Thêm</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Khóa Học</th>
                        <th>Bài Giảng</th>
                        <th>Câu Hỏi</th>
                        <th>Đáp Án</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt=0; ?>
                        <?php foreach ($listquizz as $key => $quizz): $stt++; ?>
                            <!-- <?php echo var_dump($quizz); ?><br/> -->
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <th><?php echo $quizz['program_name']; ?></th>
                                <td><?php echo $quizz['course_name']; ?></td>
                                <td><?php echo $quizz['question']; ?></td>
                                <td><?php
                                        if($quizz['answer'] == 1){
                                            echo "True";
                                        } else{
                                            echo "False";
                                        } 
                                         
                                    ?>
                                    
                                </td>
                                <td class="text-center">
                                    <a href="teacher.php?action=quizz_edit&id=<?php echo $quizz['id']; ?>" class="text-primary">Sửa</a> / 
                                    <a class="text-danger" href="teacher.php?action=destroy&id=<?php echo $quizz['id']; ?>" onclick="return confirm('Bạn có muốn xóa người dùng này?')"  role="button">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?> 
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('view/teacher/footer.php'); ?>