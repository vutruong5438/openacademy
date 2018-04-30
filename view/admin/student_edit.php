<?php include_once('view/admin/header.php'); ?>

<div class="container">
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Teachers</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <strong>Teacher Info</strong>
                </div>
                <div class="card-body card-block">
                  <form method="post" enctype="multipart/form-data" class="form-horizontal" action="admin.php?action=student_update&id=<?php echo $infoUser['id']; ?>">
                    <div class="row form-group">
                      <div class="col col-md-3"><label class=" form-control-label">Username</label></div>
                      <div class="col-12 col-md-9">
                        <p class="form-control-static"><?php echo $infoUser['username']?></p>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">FullName</label>
                      </div>
                      <div class="col-12 col-md-9">
                        <input type="text" name="fullname" placeholder="FullName" class="form-control" value="<?php echo $infoUser['fullname']?>" >
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                      <div class="col-12 col-md-9">
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo $infoUser['email']?>">
                        </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                      <div class="col-12 col-md-9">
                        <input type="text" name="password" placeholder="Password" class="form-control" value="<?php echo $infoUser['password']?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Thông Tin</label></div>
                      <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Reset
                    </button>
                  </form>
                </div>
              </div>
            </div>
        </div>

</div>


<?php include_once('view/admin/footer.php'); ?>