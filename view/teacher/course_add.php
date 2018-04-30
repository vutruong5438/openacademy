<?php include_once('view/teacher/header.php'); ?>

<div class="container">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Courses</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong>Add Courses</strong>
            </div>
            <div class="card-body card-block">
              <form method="post" enctype="multipart/form-data" class="form-horizontal" id="course_store"
              action="teacher.php?action=course_store">
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class=" form-control-label">Course Name</label></div>
                  <div class="col-12 col-md-4">
                    <input type="text" name="course_name" class="form-control" >
                  </div>
                  <div class="col col-md-2">
                    <label for="select" class=" form-control-label">Program</label>
                  </div>
                    <div class="col-12 col-md-4">
                      <select name="program_id" class="form-control">

                        <?php foreach ($listprogs as $key => $prog): ?>
                            <option value="<?php echo $prog['id']; ?>"><?php echo $prog['program_name']; ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                </div>
                <div class="row form-group">
                  <div class="col-12 col-md-12">
                    <textarea name="course-body" id="course-body" rows="10" class="form-control">
                    </textarea>
                    <script>CKEDITOR.replace('course-body');</script>
                  </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">
                        <i class="fa fa-dot-circle-o"></i> Add
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
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