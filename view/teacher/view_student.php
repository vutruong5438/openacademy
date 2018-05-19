<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Danh sách đã gia nhập</h1>
                    </div>
                    
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
                        <!-- <?php 
                        if (isset($_SESSION['accecpt_success'])) {
                                echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-success">Success</span>
                                                        Chấp nhận thành công cho Sing viên tham gia vào khóa học.
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                unset($_SESSION['accecpt_success']);
                            }
                        if (isset($_SESSION['accecpt_danger'])) {
                                echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-danger">Fail</span>
                                                        Lỗi.
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                unset($_SESSION['accecpt_danger']);
                            } 
                    ?> -->
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Sinh Viên</th>
                        <th>Khóa Học</th>
                        <th>Trạng Thái</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if ($listprogs_wait != 0) { ?>
                            <?php $stt=0; ?>
                            <?php foreach ($listprogs_wait as $key => $wait): $stt++; ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $wait['fullname']; ?></td>
                                    <td><?php echo $wait['program_name']; ?></td>
                                    <td>Đã Chấp Nhận</td>
                                </tr>
                            <?php endforeach ?>
                        <?php } else {
                            echo '<tr ">
                                    <td colspan="5">Bây giờ không Sinh viên tham gia</td>
                                </tr>';
                        } ?>    
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