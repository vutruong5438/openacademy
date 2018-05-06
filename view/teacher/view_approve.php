<?php include_once('view/teacher/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Waiting for Accept</h1>
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
                            <strong class="card-title">List</strong>
                        </div>
                        <?php 
                        if (isset($_SESSION['accecpt_success'])) {
                                echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-success">Success</span>
                                                        You successfully accept this student to your program.
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                unset($_SESSION['accecpt_success']);
                            }
                        if (isset($_SESSION['accecpt_danger'])) {
                                echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-danger">Fail</span>
                                                        Fail to accept.
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                unset($_SESSION['accecpt_danger']);
                            } 
                    ?>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Student Name</th>
                        <th>Program</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if ($listprogs_wait != 0) { ?>
                            <?php $stt=0; ?>
                            <?php foreach ($listprogs_wait as $key => $wait): $stt++; ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $wait['fullname']; ?></td>
                                    <td><?php echo $wait['program_name']; ?></td>
                                    <td>Wait To Accept</td>
                                    <td>
                                        <a class="text-primary" href="teacher.php?action=accecpt_prog&id=<?php echo $wait['id']; ?>" onclick="return confirm('Do you want to Accecpt this student for you Program?')"  role="button"><i class="menu-icon fa fa-check-square"></i> Accecpt</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php } else {
                            echo '<tr ">
                                    <td colspan="5">Now you don\'t have stdent wait for accept</td>
                                    
                                </tr>';
                        } ?>    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('view/teacher/footer.php'); ?>