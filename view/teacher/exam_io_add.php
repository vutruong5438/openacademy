<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Exam</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <strong>Add IO Exam</strong>
                </div>
                <div class="card-body card-block">
                  <form action="teacher.php?action=exam_io_store&id=<?php echo $infoQuizz['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="select" class=" form-control-label">Exam</label>
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Question</label></div>
                      <div class="col-12 col-md-9">
                        <!-- <input type="text" id="question" name="question" placeholder="Text" class="form-control"> -->
                        <textarea name="question" id="question" rows="" placeholder="Question..." class="form-control"><?php echo $infoQuizz['question']; ?>
                        </textarea>
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Input</label></div>
                      <div class="col col-md-5">
                        <input type="text" id="input" name="input" placeholder="Input" class="form-control">
                      </div>
                      <div class="col col-md-1"><label for="text-input" class=" form-control-label">Output</label></div>
                      <div class="col col-md-5">
                        <input type="text" id="output" name="output" placeholder="Output" class="form-control">
                      </div>
                    </div>
                    <div class="">
                  <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Add
                  </button>
                  <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                  </button>
                </div>
                  </form>
                </div>
                
              </div>
            </div>


        </div>
</div>


<?php include_once('view/teacher/footer.php'); ?>