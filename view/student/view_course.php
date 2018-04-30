<?php include_once('view/student/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Chuyên Mục</h1>
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
              <form action="" method="post" class="form-horizontal ">
                <div class="row form-group">
                  <div class="col col-md-4 offset-md-8">
                    <div class="input-group">
                      <div class="input-group-btn">
                        <button class="btn btn-primary">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                      <input type="text" id="input1-group2" name="input1-group2" placeholder="Username" class="form-control">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" colspan="3">Jave</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt=0; ?>
                  <?php foreach ($list as $key => $course): $stt++; ?>
                  <tr>
                      <th scope="row"><?php echo $stt; ?></th>
                      <td colspan="2"><?php echo $course['course_name']; ?></td>
                      <td class="float-right"><a  href="student.php?action=course_render&id=<?php echo $course['id']; ?>" type="button" class="text-primary">Go&nbsp;</a>
                      </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once('view/student/footer.php'); ?>