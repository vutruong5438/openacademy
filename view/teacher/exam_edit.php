<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Bài Tập</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <strong>Thêm Bài Tập</strong>
                </div>
                <div class="card-body card-block">
                  <form action="teacher.php?action=exam_update&id=<?php echo $infoQuizz['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                      <!-- <div class="col col-md-2">
                        <label for="select" class=" form-control-label">Program</label>
                      </div>
                        <div class="col-12 col-md-4">
                          <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Java</option>
                            <option value="2">Python</option>
                          </select>
                        </div> -->
                      <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Bài Giảng</label>
                      </div>
                        <div class="col-12 col-md-4">
                          <select name="course_id" id="course_id" class="form-control">
                            <option value="<?php echo $infoQuizz['course_id']; ?>"><?php echo $infoQuizz['program_name']; ?>  /  <?php echo $infoQuizz['course_name']; ?></option>
                          </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Câu Hỏi</label></div>
                      <div class="col-12 col-md-9">
                        <!-- <input type="text" id="question" name="question" placeholder="Text" class="form-control"> -->
                        <textarea name="question" id="question" rows="" placeholder="Question..." class="form-control"><?php echo $infoQuizz['question']; ?></textarea>
                      </div>
                    </div>
                    <?php foreach ($list_io as $key => $io): ?>
                      <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Input</label></div>
                        <div class="col col-md-5">
                          <input type="text" id="input" name="input" placeholder="Input" class="form-control" value="<?php echo $io['input']; ?>">
                        </div>
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Output</label></div>
                        <div class="col col-md-5">
                          <input type="text" id="output" name="output" placeholder="Output" class="form-control" value="<?php echo $io['output']; ?>">
                        </div>
                      </div>
                    <?php endforeach ?>
                    <div class="">
                  <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Sửa
                  </button>
                  <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Đặt Lại
                  </button>
                </div>
                  </form>
                </div>
                
              </div>
            </div>


        </div>
</div>


<?php include_once('view/teacher/footer.php'); ?>