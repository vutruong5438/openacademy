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
                        </>
                        <div divclass="card-body">
                            <?php foreach ($listprogram as $key => $program): ?>
                            <div class="col-md-4">
		                        
		                            <div class="card">
	                                    <div class="card-header">
	                                        <strong class="card-title">
	                                            <a  href="student.php?action=viewcours&id=<?php echo $program['id']; ?>" role="button"><?php echo $program['program_name']; ?></a>
	                                            <small><span class="badge badge-success float-right mt-1">Success</span></small>
	                                        </strong>
	                                    </div>
	                                    <div class="card-body">
	                                        <p class="card-text">
	                                            Create Date: <?php echo date("d-m-Y", strtotime($program['date_create'])) ; ?>
	                                        </p>
	                                        <p class="card-text">
	                                            Create by Administrator <br/>
                                                <?php echo $program['fullname']; ?><br/>
                                                5 People
	                                        </p>
	                                    </div>
                                	</div>
		                        
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

</div>


<?php include_once('view/student/footer.php'); ?>