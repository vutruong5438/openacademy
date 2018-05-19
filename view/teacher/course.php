<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Courses</h1>
                    </div>
                    <?php 
                if (isset($_SESSION['enjoy_prog'])) {
                        echo $_SESSION['enjoy_prog'];
                        unset($_SESSION['enjoy_prog']);
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
                            <strong class="card-title">Danh Sách</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Bài Giảng</th>
                        <th>Giảng Viên</th>
                        <th>Chuyền đề</th>
                        <th>Thông tin</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $stt=0; ?>
                        <?php foreach ($listcours as $key => $course): $stt++; ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $course['course_name']; ?></td>
                                <td></td>
                                <td><?php echo $course['program_name']; ?></td>
                                <td></td>
                                <td>
                                    <a href="teacher.php?action=course_edit&id=<?php echo $course['id']; ?>" class="text-primary">Sửa</a> / 
                                    <a class="text-danger" href="teacher.php?action=destroy&id=<?php echo $course['id']; ?>" onclick="return confirm('Bạn có muốn xóa người dùng này?')"  role="button">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                      <!-- <tr>
                        <td>1</td>
                        <td>Toán Tử</td>
                        <td>Nguyễn Văn A</td>
                        <td>Java</td>
                        <td>Java Program</td>
                        <td>
                            <a  href="coursesedit.html" role="button">Sửa&nbsp;</a>/
                            <a  href="#" role="button">Xóa</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Vòng Lặp</td>
                        <td>Nguyễn Văn B</td>
                        <td>Java</td>
                        <td>Java Program</td>
                        <td>
                            <a  href="coursesedit.html" role="button">Sửa&nbsp;</a>/
                            <a  href="#" role="button">Xóa</a>
                        </td> -->
                      <!-- </tr> -->
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