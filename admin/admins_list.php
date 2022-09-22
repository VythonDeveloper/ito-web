<?php 
include "header.php"; 
$getAdmins = getAdmins();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admins of ITO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard">Home</a></li>
              <li class="breadcrumb-item active">Admins</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-primary card-tabs">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Dp</th>
              <th>Fullname</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>About Me</th>
              <th>Post</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getAdmins as $key => $value) {
                  ?>
                    <tr>
                      <td><?php echo $value['id'];?></td>
                      <td><img src="../assets/admins/<?php echo $value['dp'];?>" height="100px" width="100px" loading='lazy'/></td>
                      <td><?php echo $value['fullname'];?></td>
                      <td><?php echo $value['phone'];?></td>
                      <td><?php echo $value['email'];?></td>
                      <td><?php echo $value['about_me'];?></td>
                      <td><?php echo $value['post'];?></td>
                      <td>
                        <button type="submit" class="btn btn-danger" name="deleteEnrolledTutor" form="enrolled_tutor_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>">Delete</button>
                      </td>
                    </tr>
                <?php }  ?>
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Dp</th>
              <th>Fullname</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>About Me</th>
              <th>Post</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php";?>