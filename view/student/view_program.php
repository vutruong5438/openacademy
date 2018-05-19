<?php include_once('view/student/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Chuyên Mục</h1>
                </div>
                <?php 
                    if (isset($_SESSION['enjoy_prog'])) {
                        // echo $_SESSION['enjoy_prog'];
                        
                        echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger">Fail</span>';
                                                echo $_SESSION['enjoy_prog'];
                                              echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                         unset($_SESSION['enjoy_prog']);
                    }
                 ?>
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
                                    <input type="text" id="input1-group2" name="input1-group2" placeholder="Program" class="form-control">
                                  </div>
                                </div>
                                <?php
                                        if (isset($_SESSION['refuse'])) {
                                            echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                                <span class="badge badge-pill badge-danger">Fail</span>
                                                                    Bạn chưa được chấp nhận cho Khóa học này.
                                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>';
                                            unset($_SESSION['refuse']);
                            }  
                                   ?>
                              </div>
                            </form>
                        </>
                        <div divclass="card-body">
                            <!-- <form id="form"> -->
                                <div class="col col-md-12">
                                    <br>
                                    <div id="result-enjoy-prog"></div>
                                </div>
                            <?php foreach ($listprogram as $key => $program): ?>
                                
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">
                                                <a  href="student.php?action=viewcours&id=<?php echo $program['id']; ?>" role="button"><?php echo $program['program_name']; ?></a>
                                                <small><a id="btn" href="student.php?action=enjoy_prog&id=<?php echo $program['id']; ?>" class="badge badge-success float-right mt-1">Enjoy</a></small>
                                            </strong>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                               Ngày tạo: <?php echo date("d-m-Y", strtotime($program['date_create'])) ; ?>
                                            </p>
                                            <p class="card-text">
                                                Được tạo bởi Administrator <br/>
                                                <?php echo $program['fullname']; ?><br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

</div>


<?php include_once('view/student/footer.php'); ?>