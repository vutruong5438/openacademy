<?php include_once('view/admin/header.php'); ?>

<div class="container">
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Khóa Học</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <strong>Thêm</strong>
                </div>
                <div class="card-body card-block">
                  <form method="post" action="admin.php?action=prog_store">
                        <div class="form-group">
                            <label>Khóa Học</label>
                            <input type="text" name="program_name" class="form-control" placeholder="Program Name">
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" name="code" class="form-control" placeholder="Code">
                        </div>
                        <div class="form-group">
                            <label for="level" class=" form-control-label">Giảng Viên</label>
                            <select name="user_id" class="form-control">
                              <?php foreach ($listTeacher as $key => $user): ?>
                                <option value="<?php echo $user['id']; ?>"><?php echo $user['fullname']; ?></option>
                              <?php endforeach ?>
                              <!-- <option value="2">Teacher</option>
                              <option value="3">Student</option> -->
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea name="detail" id="detail" rows="" placeholder="Detail..." class="form-control"></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">
                      <i class="fa fa-dot-circle-o"></i> Thêm
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Đặt lại
                    </button>
                  </form>
                </div>
              </div>
            </div>
        </div>

</div>


<?php include_once('view/admin/footer.php'); ?>