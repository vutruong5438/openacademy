<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Chuyền Đề</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Sửa Chuyền Đề</strong>
            </div>
            <div class="card-body card-block">
              <form method="post" enctype="multipart/form-data" class="form-horizontal" id="course_edit"
              action="teacher.php?action=course_update&id=<?php echo $infoUser['id']; ?>">
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class=" form-control-label">Bài Giảng</label></div>
                  <div class="col-12 col-md-4">
                  	<input type="text" name="course_name" class="form-control" value="<?php echo $infoUser['course_name']?>" >
                  </div>
                  <div class="col col-md-2">
                  	<label for="select" class=" form-control-label">Chuyên Đề</label>
                  </div>
                    <div class="col-12 col-md-4">
                      <select name="program" class="form-control" readonly>
                        <option value="<?php echo $infoUser['program_id']?>"><?php echo $infoUser['program_name']?></option>
                      </select>
                    </div>
                </div>
                <div class="row form-group">
                  <div class="col-12 col-md-12">
                    <textarea name="course-body" id="course-body" rows="10" class="form-control">
                    	<?php echo $infoUser['body']?>
                    </textarea>
                    <script>CKEDITOR.replace('course-body');</script>
                  </div>
                </div>
                <div>
              		<button type="submit" class="btn btn-primary btn-sm" name="submit">
                		<i class="fa fa-dot-circle-o"></i> Sửa
              		</button>
              		<button type="reset" class="btn btn-danger btn-sm">
                		<i class="fa fa-ban"></i> Đặt lại
              		</button>
            	</div>
              </form>
            </div>
            <!-- <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm" name="submit">
                <i class="fa fa-dot-circle-o"></i> Add
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
              </button>
            </div> -->
          </div>
        </div>
    </div>
</div>


<?php include_once('view/teacher/footer.php'); ?>