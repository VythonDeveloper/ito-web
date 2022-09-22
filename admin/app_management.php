<?php include "header.php";
$getAppDetails = getAppDetails();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>App Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard">Home</a></li>
              <li class="breadcrumb-item active">App Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-primary shadow">
            <div class="card-header">
              <h3 class="card-title">App in Maintenance</h3>
              <div class="card-tools">
                <form id="app_maintenance_form" method="POST" action="dataProcess"></form>
                <button type="submit" class="btn btn-primary btn-sm" style="display: inline-block;margin-left: 20px;" name='updateAppMaintenance' form="app_maintenance_form">Update</button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table width="100%">
                <tbody>
                  <tr>
                    <td><label for="tutorApp">Tutor's App</label></td>
                    <td><input type="checkbox" data-bootstrap-switch id="tutorApp" name="tutorApp" form="app_maintenance_form" <?php if($getAppDetails['Tutor']['suspend'] == 'True'){echo 'checked';}?>></td>
                  </tr>
                  <tr>
                    <td><label for="studentApp">Student's App</label></td>
                    <td><input type="checkbox" data-bootstrap-switch id="studentApp" name="studentApp" form="app_maintenance_form"  <?php if($getAppDetails['Student']['suspend'] == 'True'){echo 'checked';}?>></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="card card-success shadow">
            <div class="card-header">
              <h3 class="card-title">Tutor's App Version</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="POST" action="dataProcess" id="tutor_app_version_form"></form>
              <label>Android App Version</label>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" name="androidAppVersion" value="<?php echo $getAppDetails['Tutor']['android_version'];?>" form="tutor_app_version_form" required>
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info btn-flat" name="updateTutorAppVersion" form="tutor_app_version_form">Go!</button>
                </span>
              </div>
              <label>IOS App Version</label>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" name="iosAppVersion" value="<?php echo $getAppDetails['Tutor']['ios_version'];?>" form="tutor_app_version_form" required>
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info btn-flat" name="updateTutorAppVersion" form="tutor_app_version_form">Go!</button>
                </span>
              </div>
              If the App that the user is operating is not equal to the version then it will ask for update.
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="card card-success shadow">
            <div class="card-header">
              <h3 class="card-title">Student's App Version</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="POST" action="dataProcess" id="student_app_version_form"></form>
              <label>Android App Version</label>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" name="androidAppVersion" value="<?php echo $getAppDetails['Student']['android_version'];?>" form="student_app_version_form" required>
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info btn-flat" name="updateStudentAppVersion" form="student_app_version_form">Go!</button>
                </span>
              </div>
              <label>IOS App Version</label>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" name="iosAppVersion" value="<?php echo $getAppDetails['Student']['ios_version'];?>" form="student_app_version_form" required>
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info btn-flat" name="updateStudentAppVersion" form="student_app_version_form">Go!</button>
                </span>
              </div>
              If the App that the user is operating is not equal to the version then it will ask for update.
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php";?>