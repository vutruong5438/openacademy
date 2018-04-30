<?php include_once('view/admin/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ProGram</h1>
                    </div>
                <?php 
                    if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    if (isset($_SESSION['danger'])) {
                            echo $_SESSION['danger'];
                            unset($_SESSION['danger']);
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
                            <strong class="card-title">List</strong>
                            <a type="button" class="btn btn-outline-primary btn-sm float-right" href="admin.php?action=prog_add">Add Program</a>
                        </div>
                        <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Program</th>
                                    <th>Teacher</th>
                                    <th>Date Create</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                        <?php $stt=0; ?>
                        <?php foreach ($listProg as $key => $prog): $stt++; ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $prog['program_name']; ?></td>
                                <td><?php echo $prog['fullname']; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($prog['date_create'])) ; ?></td>
                                <td class="text-center">
                                    <a href="admin.php?action=prog_edit&id=<?php echo $prog['id']; ?>" class="text-primary">Edit</a> / 
                                    <a class="text-danger text-cente" href="admin.php?action=destroy&id=<?php echo $prog['id']; ?>" onclick="return confirm('Bạn có muốn xóa người dùng này?')"  role="button">Del</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                      <!-- <tr>
                        <td>1</td>
                        <td>Java</td>
                        <td>GV: Nguyễn Văn A</td>
                        <td>
                            <a  href="#" role="button">Sửa&nbsp;</a>/
                            <a  href="#" role="button">Xóa</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Python
                        <td>GV: Nguyễn Văn B</td>
                        <td>
                            <a  href="#" role="button">Sửa&nbsp;</a>/
                            <a  href="#" role="button">Xóa</a>
                        </td>
                      </tr> -->
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
</div>


<?php include_once('view/admin/footer.php'); ?>