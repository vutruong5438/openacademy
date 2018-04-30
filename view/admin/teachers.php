<?php include_once('view/admin/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Chuyên Mục</h1>
                    </div>
                </div>
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
                        <th>Tên Đăng Nhập</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($listTeacher as $key => $teacher): ?>
                            <tr>
                                <td><?php echo $teacher['username']; ?></td>
                                <td><?php echo $teacher['fullname']; ?></td>
                                <td><?php echo $teacher['email']; ?></td>
                                <td>
                                    <a href="admin.php?action=teacher_edit&id=<?php echo $teacher['id']; ?>" role="button">Sửa</a> / 
                                    <a href="admin.php?action=destroy_tc&id=<?php echo $teacher['id']; ?>" onclick="return confirm('Bạn có muốn xóa người dùng này?')"  role="button">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach ?>


                      <!-- <tr>
                        <td>1</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>Nguyễn Văn A</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>
                            <a  href="infogiangvien.html" role="button">Sửa&nbsp;</a>/
                            <a  href="infosinhvien.html" role="button">Xóa</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>nguyenvanb@gmail.com</td>
                        <td>Nguyễn Văn B</td>
                        <td>nguyenvanb@gmail.com</td>
                        <td>
                            <a  href="infogiangvien.html" role="button">Sửa&nbsp;</a>/
                            <a  href="infosinhvien.html" role="button">Xóa</a>
                        </td>
                      </tr> -->
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>

</div>


<?php include_once('view/admin/footer.php'); ?>