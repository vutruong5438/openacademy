<?php include_once('view/teacher/header.php'); ?>

<div class="container">
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List</strong>
                            <a type="button" class="btn btn-outline-primary btn-sm float-right" href="teacher.php?action=course_add">Thêm Bài Giảng</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Chuyên Đề</th>
                        <th>Giảng Viên</th>
                        <th>Ngày Tạo</th>
                        <th>Thông Tin</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $stt=0; ?>
                        <?php foreach ($listprogs as $key => $prog): $stt++; ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $prog['program_name']; ?></td>
                                <td><?php echo $prog['fullname']; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($prog['date_create'])) ; ?></td>
                                <td><?php echo $prog['detail']; ?></td>
                            </tr>
                        <?php endforeach ?>
                      <!-- <tr>
                        <td>1</td>
                        <td>Java</td>
                        <td>Nguyễn Văn A</td>
                        <td>Information Java</td>
                        
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Python</td>
                        <td>Nguyễn Văn B</td>
                        <td>Information Python</td>
                      </tr> -->
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>




        </div> <!-- .content -->
    </div>

</div>


<?php include_once('view/teacher/footer.php'); ?>