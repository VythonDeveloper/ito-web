<?php 
include "header.php"; 
$adminId = $_SESSION['admin_id'];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Video</li>
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
                <input type="text" class="form-control rounded-0" id="blogTitle" form="create_blog_form" required autofocus="true">
              </div>
              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control rounded-0" id="category" form="create_blog_form" required>
                  <?php foreach (News_Category as $key) { ?>
                    <option><?php echo $key;?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="videoUrl">YouTube Video Link</label>
                <input type="text" class="form-control rounded-0" id="videoUrl" form="create_blog_form" required autofocus="true">
              </div>
              <label for="blogContent">Content</label>
              <textarea id="blogContent">
                <!-- Place <em>some</em> <u>text</u> <strong>here</strong> -->
                India TV Online <br><br>

                Follow India TV Online:<br><br>

                Facebook Page:  <a href = 'https://www.facebook.com/India-TV-Online-107934554904059'>https://www.facebook.com/India-TV-Online-107934554904059</a><br>
                Twitter Page: <a href = 'https://twitter.com/IndiaTVOnline1'>https://twitter.com/IndiaTVOnline1</a><br>
                Instagram Handle: <a href = 'https://www.instagram.com/indiatvonline/'>https://www.instagram.com/indiatvonline/</a><br>
                LinkedIn Page: <a href = 'https://www.linkedin.com/in/india-tv-online-b478b5217/'>https://www.linkedin.com/in/india-tv-online-b478b5217/</a><br>
                Website: <a href = 'https://indiatvonline.in'>https://indiatvonline.in</a><br><br>

                Hit Like 👍, Share and Subscribe ❤<br>
                Team India TV Online
              </textarea>
            </div>
          </div>
          <!-- /.col-->
        </div>
      </div>
    </section>
    <!-- /.content -->
    <!-- Progress Modal -->
    <div class="modal fade" id="progress_modal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Posting your Video. Please keep patience.</h4>
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
        placeholder: 'Hello stand alone ui',
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
    //event.preventDefault();
    $("#publishBlog").attr("disabled", "disabled");
    $("#draftBlog").attr("disabled", "disabled");
    var formdata = new FormData();
    formdata.append("videoUrl", _('videoUrl').value);
    formdata.append("adminId", '<?php echo $adminId;?>');
    formdata.append("blogTitle", _('blogTitle').value);
    formdata.append("category", _('category').value);
    var content = $('#blogContent').summernote('code');
    formdata.append("content", content);
    formdata.append("blogAction",blogAction);
    formdata.append("from",'Create_Video_Publish');
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
      _("progress_status").innerHTML = 'Blog Saved and Please Wait Refreshing the page.';
      setTimeout(function () { location.reload(true); }, 1000); 
      //alert('Blog Published');
    }
    else if(event.target.responseText != 'Failed'){
      _("blog_progress").className = 'progress-bar progress-bar-striped bg-danger';
      _("progress_status").innerHTML = 'Failed to Save the Blog. Try again.';
      _("progress_status").innerHTML = event.target.responseText;
      _("modal_disbtn").style.display = 'block';
      $('#publishBlog').removeAttr("disabled");
      $('#draftBlog').removeAttr("disabled");
    }
  }
  function errorHandler(event){
    $('#publishBlog').removeAttr("disabled");
    alert("Status : Upload Failed");
  }
</script>