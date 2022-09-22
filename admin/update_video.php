<?php 
include "header.php"; 
$blogId = getSafeValue($_GET['bid']);
$getSpecificVideo = getSpecificVideo($blogId);
$adminId = $_SESSION['admin_id'];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Video</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Summernote Editor
              </h3>
              <form enctype="multipart/form-data" method="post" id="create_blog_form"></form>
              <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm" style="display: inline-block;margin-left: 20px;" id='publishBlog' form="create_blog_form" onclick="submit_blog('Active');">Publish</button>
                <button type="button" class="btn btn-secondary btn-sm" style="display: inline-block;" id='draftBlog' form="create_blog_form" onclick="submit_blog('Draft');">Draft</button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label for="blogTitle">Video Title</label>
                <input type="text" class="form-control rounded-0" id="blogTitle" form="create_blog_form" required autofocus="true" value="<?php echo $getSpecificVideo['title'];?>">
              </div>
              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control rounded-0" id="category" form="create_blog_form" required>
                  <?php foreach (News_Category as $key) { ?>
                    <option <?php if($getSpecificVideo['category'] == $key){echo 'selected';}?>><?php echo $key; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="videoUrl">YouTube Video Link</label>
                <input type="text" class="form-control rounded-0" id="videoUrl" form="create_blog_form" required autofocus="true" value="<?php echo $getSpecificVideo['cover_img'];?>">
              </div>
              <label for="blogContent">Content</label>
              <textarea id="blogContent">
                <?php echo $getSpecificVideo['content'];?>
              </textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->

    <div class="modal fade" id="progress_modal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Reposting your Video. Please keep patience.</h4>
          </div>
          <div class="modal-body">
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" id="blog_progress" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p style="text-align: center;" id='progress_status'>Almost Done</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="display: none;" id="modal_disbtn">Ok</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
  <?php include "footer.php";?>

<script>
  $(function () {
    // Summernote
    $('#blogContent').summernote({
        tabsize: 2,
        height: 500,
        // focus: true
      });
  })
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#coverImgPreview')
          .attr('src', e.target.result)
          .width(150)
          .height(100);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  function submit_blog(blogAction){

    var formdata = new FormData();
    $("#publishBlog").attr("disabled", "disabled");
    $("#draftBlog").attr("disabled", "disabled");
    
    formdata.append("adminId", '<?php echo $adminId;?>');
    formdata.append("blogId", '<?php echo $blogId;?>');
    formdata.append("videoUrl", _('videoUrl').value);
    formdata.append("blogTitle", _('blogTitle').value);
    formdata.append("category", _('category').value);
    var content = $('#blogContent').summernote('code');
    formdata.append("content", content);
    formdata.append("blogAction",blogAction);
    formdata.append("from",'Edit_Video_Publish');
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.open("POST", "dataProcess.php");
    ajax.send(formdata);
    _("modal_disbtn").style.display = 'none';
    $("#progress_modal").modal({backdrop: 'static',keyboard: false});
  }
  function progressHandler(event){
    var percent = (event.loaded / event.total) * 100;
    _("blog_progress").style.width = percent+'%';
  }
  function completeHandler(event){

    //alert(event.target.responseText);

    if(event.target.responseText == 'Success'){
      _("blog_progress").className = 'progress-bar progress-bar-striped bg-success';
      _("progress_status").innerHTML = 'Blog Posted and Please Wait Refreshing the page.';
      setTimeout(function () { location.reload(true); }, 1000); 
      //alert('Blog Published');
    }
    else if(event.target.responseText == 'Failed'){
      _("blog_progress").className = 'progress-bar progress-bar-striped bg-danger';
      _("progress_status").innerHTML = 'Failed to Publish the Blog. Try again.';
      _("modal_disbtn").style.display = 'block';
      $('#publish_blog').removeAttr("disabled");
      $('#draft_blog').removeAttr("disabled");
    }
  }
  function errorHandler(event){
    $('#publish_blog').removeAttr("disabled");
    alert("Status : Upload Failed");
  }
</script>