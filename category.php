<?php
include "header.php";
$newsCategory = News_Category[0];
if(isset($_GET['news'])){
    $newsCategory = $_GET['news'];
    if($newsCategory == "Travel "){
        $newsCategory = "Travel & Tourism";
    }
}
$getCategoryNews = getCategoryNews($newsCategory);
?>

    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h4 class="m-0 text-uppercase font-weight-bold">Category: <?php echo $newsCategory;?></h4>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                </div>

                <?php 
                for ($i=0; $i < count($getCategoryNews); $i++) { 
                    if($getCategoryNews[$i]['type'] == "Article"){ ?>
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getCategoryNews[$i]['cover_img'];?>" style="object-fit: cover; height: 270px;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getCategoryNews[$i]['category'];?>"><?php echo $getCategoryNews[$i]['category'];?></a>
                                        <a class="text-body"><small><?php echo date('M j, Y', strtotime($getCategoryNews[$i]['updated_on']));?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getCategoryNews[$i]['id'];?>"><?php echo $getCategoryNews[$i]['title'];?></a>
                                    <p class="m-0 line2content"><?php echo $getCategoryNews[$i]['title'];?></p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <a href="single?article=<?php echo $getCategoryNews[$i]['id'];?>"><small><i class="fa fa-info-circle mr-2"></i>Read More</small></a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else{ 
                        $video_code = explode('?v=',$getCategoryNews[$i]['cover_img'])[1]; ?>
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" style="object-fit: cover; height: 270px;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getCategoryNews[$i]['category'];?>"><?php echo $getCategoryNews[$i]['category'];?></a>
                                        <a class="text-body"><small><?php echo date('M j, Y', strtotime($getCategoryNews[$i]['updated_on']));?></small></a>
                                    </div>
                                    <div class = "videoBtn"><a id="videolink<?php echo $getCategoryNews[$i]['id'];?>" class="videolink h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getCategoryNews[$i]['title'];?></a></div>
                                    <p class="m-0 line2content"><?php echo $getCategoryNews[$i]['title'];?></p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <div class = "videoBtn"><a id="videolink<?php echo $getCategoryNews[$i]['id'];?>" class="videolink cursor-pointer" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><small><i class="fa fa-video mr-2"></i>Play Now</small></a></div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } 
                } ?>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

<?php
include "footer.php";
?>