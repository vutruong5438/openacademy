<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Quizz</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <strong>Add Quizz</strong>
                  <!-- <?php echo var_dump($infoQuizz); ?><br/> -->
                </div>
                <div class="card-body card-block">
                  <form action="teacher.php?action=quizz_update&id=<?php echo $infoQuizz['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                      <div class="col col-md-2">
                        <label for="select" class=" form-control-label">Courses</label>
                      </div>
                        <div class="col-12 col-md-4">
                          <select name="course_id" id="course_id" class="form-control" readonly>
                              <option value="<?php echo $infoQuizz['course_id']; ?>"><?php echo $infoQuizz['program_name']; ?>  /  <?php echo $infoQuizz['course_name']; ?></option>
                            <!-- <option value="0">Please select</option>
                            <option value="1">First</option>
                            <option value="0">Second</option> -->
                          </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Question</label></div>
                      <div class="col-12 col-md-4">
                        <input type="text" name="question" placeholder="Text" class="form-control" value="<?php echo $infoQuizz['question']; ?>">
                      </div>
                      <div class="col col-md-2">
                        <label for="select" class=" form-control-label">Answer</label>
                      </div>
                        <div class="col-12 col-md-4">
                          <select name="answer" id="answer" class="form-control">
                            <option value="1">True</option>
                            <option value="0">Fase</option>
                          </select>
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