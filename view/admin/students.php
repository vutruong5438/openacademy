<?php include_once('view/admin/header.php'); ?>

<div class="container">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh Sách</strong>
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
                    <tbody>
                        <?php foreach ($listStudent as $key => $student): ?>
                            <tr>
                                <td><?php echo $student['username']; ?></td>
                                <td><?php echo $student['fullname']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td>
                                    <a href="admin.php?action=student_edit&id=<?php echo $student['id']; ?>" role="button">Sửa</a> / 
                                    <a href="admin.php?action=destroy_st&id=<?php echo $student['id']; ?>" onclick="return confirm('Bạn có muốn xóa người dùng này?')"  role="button">Xóa</a>
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