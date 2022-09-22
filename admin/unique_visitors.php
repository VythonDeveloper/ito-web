<?php include "header.php"; 
$getUniqueVisitors = getUniqueVisitors();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enrolled Tutors & Institutes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard">Home</a></li>
              <li class="breadcrumb-item active">Enrolled Tutors & Institutes</li>
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
              <th>Month</th>
              <th>Visits</th>
              <th>IP Address</th>
              <th>Country, City</th>
          	</tr>
            </thead>
            <tbody>
                <?php
                foreach ($getUniqueVisitors as $key => $value) {
                  ?>
                    <tr>
                    	<td><?php echo $value['id'];?></td>
                      <td><?php echo $value['month'];?></td>
                      <td><?php echo $value['u_visit'];?></td>
                      <td><?php echo $value['ip'];?></td>
                      <td><?php echo $value['ip_country'].', '.$value['ip_city'];?></td>                      
                    </tr>
                <?php }  ?>
          	</tbody>
            <tfoot>
            <tr>
            	<th>#</th>
              <th>Month</th>
              <th>Visits</th>
              <th>IP Address</th>
              <th>Country, City</th>
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