<?php include "header.php";
$getArticlesList = getArticlesList();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Articles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard">Home</a></li>
              <li class="breadcrumb-item active">All Articles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
          <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-activeBlog" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Active Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-draftBlog" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Draft Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-deleteBlog" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Bulk Articles Deletion</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-one-activeBlog" role="tabpanel" aria-labelledby="custom-tabs-one-activeBlog">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Img</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Updated On</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($getArticlesList as $key => $value) {
                    if($value['status'] == 'Active'){
                      ?>
                      <tr>
                        <td><?php echo $value['id'];?></td>
                        <td><img src="../assets/blog_images/<?php echo $value['cover_img'];?>" height="50px" width="100px" loading='lazy'/></td>
                        <td><?php echo substr($value['title'], 0, 50).'...';?></td>
                        <td><?php echo $value['category'];?></td>
                        <td><?php echo date('jS M Y h:i', strtotime($value['updated_on']));?></td>
                        <td><?php echo $value['status'];?></td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-info">Action</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <form id="blog_article_form<?php echo $value['id'];?>" method="POST" action="dataProcess">
                              <div class="dropdown-menu" role="menu">
                                <button type="submit" class="dropdown-item" name="activeArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>">Active</button>
                                <button type="submit" class="dropdown-item" name="draftArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>">Draft</button>
                                <button type="button" class="dropdown-item" onclick="location.href=('update_article?bid=<?php echo $value['id'];?>');">Update</button>
                                <div class="dropdown-divider"></div>
                                <button type="submit" class="dropdown-item" name="deleteArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>" onclick="return confirm('Are you sure to delete the News?');">Delete</button>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                    <?php } 
                  }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Img</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Updated On</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-draftBlog" role="tabpanel" aria-labelledby="custom-tabs-one-draftBlog">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Img</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Updated On</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($getArticlesList as $key => $value) {
                    if($value['status'] == 'Draft'){
                      ?>
                      <tr>
                        <td><?php echo $value['id'];?></td>
                        <td><img src="../assets/blog_images/<?php echo $value['cover_img'];?>" height="50px" width="100px" loading='lazy'/></td>
                        <td><?php echo substr($value['title'], 0, 50).'...';?></td>
                        <td><?php echo $value['category'];?></td>
                        <td><?php echo date('jS M Y h:i', strtotime($value['updated_on']));?></td>
                        <td><?php echo $value['status'];?></td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-info">Action</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <form id="blog_article_form<?php echo $value['id'];?>" method="POST" action="dataProcess">
                              <div class="dropdown-menu" role="menu">
                                <button type="submit" class="dropdown-item" name="activeBlogArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>">Active</button>
                                <button type="submit" class="dropdown-item" name="draftBlogArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>">Draft</button>
                                <button type="button" class="dropdown-item" onclick="location.href=('update_article?bid=<?php echo $value['id'];?>');">Update</button>
                                <div class="dropdown-divider"></div>
                                <button type="submit" class="dropdown-item" name="deleteArticle" form="blog_article_form<?php echo $value['id'];?>" value="<?php echo $value['id'];?>" onclick="return confirm('Are you sure to delete the News?');">Delete</button>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                    <?php } 
                  }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Img</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Updated On</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <div class="tab-pane fade" id="custom-tabs-one-deleteBlog" role="tabpanel" aria-labelledby="custom-tabs-one-deleteBlog">
               Deletion will be made afterwards
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php";?>