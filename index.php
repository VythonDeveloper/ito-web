<?php
include "header.php";
$getFirst10Article = getFirst10Article();
$getAllNews = getAllNews();
?>

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <?php 
                    for ($i=0; $i < 3; $i++) { ?>
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getFirst10Article[$i]['cover_img'];?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="category?news=<?php echo $getFirst10Article[$i]['category'];?>"><?php echo $getFirst10Article[$i]['category'];?></a>
                                    <a class="text-white"><?php echo date('M j, Y', strtotime($getFirst10Article[$i]['updated_on']));?></a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getFirst10Article[$i]['id'];?>"><?php echo $getFirst10Article[$i]['title'];?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php 
                    for ($i=3; $i < 7; $i++) { ?>
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getFirst10Article[$i]['cover_img'];?>" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="category?news=<?php echo $getFirst10Article[$i]['category'];?>"><?php echo $getFirst10Article[$i]['category'];?></a>
                                        <a class="text-white"><small><?php echo date('M j, Y', strtotime($getFirst10Article[$i]['updated_on']));?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold line2content" href="single?article=<?php echo $getFirst10Article[$i]['id'];?>"><?php echo $getFirst10Article[$i]['title'];?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <?php 
                            for ($i=7; $i < 10; $i++) { ?>
                                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="single?article=<?php echo $getFirst10Article[$i]['id'];?>"><?php echo $getFirst10Article[$i]['title'];?></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->

    <!-- <div class = "videoBtn"><a id="videolink1" class="videolink" data-url="https://www.youtube.com/embed/fxWrFyUDW4A">click1</a></div>
    <button id="videolink2" class="videolink" data-url="https://www.youtube.com/embed/9U-mIm2Ul9I">click2</button> -->

    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php 
                for ($i=0; $i < 11; $i++) { 
                    if($getAllNews[$i]['type'] == "Article"){ ?>
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                    <a class="text-white"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                            </div>
                        </div>
                    <?php } else{ 
                        $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                    <a class="text-white"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                </div>
                                <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h6 m-0 text-white text-uppercase font-weight-semi-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                            </div>
                        </div>
                    <?php } 
                } ?>
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <?php 
                        for ($i=11; $i < 13; $i++) { 
                            if($getAllNews[$i]['type'] == "Article"){ ?>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" style="object-fit: cover; height: 270px;">
                                        <div class="bg-white border border-top-0 p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>">Business</a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                                            <p class="m-0 line2content"><?php echo $getAllNews[$i]['title'];?></p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                            <div class="d-flex align-items-center">
                                                <a href="single?article=<?php echo $getAllNews[$i]['id'];?>"><small><i class="fa fa-info-circle mr-2"></i>Read More</small></a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                                <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ 
                                $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" style="object-fit: cover; height: 270px;">
                                        <div class="bg-white border border-top-0 p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                                            <p class="m-0 line2content"><?php echo $getAllNews[$i]['title'];?></p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                            <div class="d-flex align-items-center">
                                                <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink cursor-pointer" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><small><i class="fa fa-video mr-2"></i>Play Now</small></a></div>
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
                        
                        <!-- Advertisement 1-->
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        <!-- Advertisement 1-->

                        <?php 
                        for ($i=13; $i < 15; $i++) {
                            if($getAllNews[$i]['type'] == "Article"){ ?>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" style="object-fit: cover; height: 270px;">
                                        <div class="bg-white border border-top-0 p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                                            <p class="m-0 line2content"><?php echo $getAllNews[$i]['title'];?></p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                            <div class="d-flex align-items-center">
                                                <a href="single?article=<?php echo $getAllNews[$i]['id'];?>"><small><i class="fa fa-info-circle mr-2"></i>Read More</small></a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                                <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ 
                                $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" style="object-fit: cover; height: 270px;">
                                        <div class="bg-white border border-top-0 p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                                            <p class="m-0 line2content"><?php echo $getAllNews[$i]['title'];?></p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                            <div class="d-flex align-items-center">
                                                <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink cursor-pointer" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><small><i class="fa fa-video mr-2"></i>Play Now</small></a></div>
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


                        <?php 
                        for ($i=15; $i < 21; $i++) {
                            if($getAllNews[$i]['type'] == "Article"){ ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" alt="" width="110px" height="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ 
                                $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" alt="" width="110px" height="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h6 m-0 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } 
                        } ?>

                        <!-- Advertisement 2-->
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        <!-- Advertisement 2-->

                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <?php if($getAllNews[21]['type'] == "Article"){ ?>
                                        <img class="img-fluid h-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[21]['cover_img'];?>" style="object-fit: cover;">
                                    <?php } else{ 
                                        $video_code = explode('?v=',$getAllNews[21]['cover_img'])[1]; ?>
                                        <img class="img-fluid h-100" src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" style="object-fit: cover;">
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="category?news=<?php echo $getAllNews[21]['category'];?>"><?php echo $getAllNews[21]['category'];?></a>
                                            <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                        </div>
                                        <?php if($getAllNews[21]['type'] == "Article"){ ?>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[21]['title'];?></a>
                                        <?php } else{ 
                                            $video_code = explode('?v=',$getAllNews[21]['cover_img'])[1]; ?>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[21]['id'];?>" class="videolink h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[21]['title'];?></a></div>
                                        <?php } ?>
                                        <p class="m-0"><?php echo $getAllNews[21]['title'];?></p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <?php if($getAllNews[21]['type'] == "Article"){ ?>
                                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><small><i class="fa fa-info-circle mr-2"></i>Read More</small></a>
                                            <?php } else{ 
                                                $video_code = explode('?v=',$getAllNews[21]['cover_img'])[1]; ?>
                                                <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[21]['id'];?>" class="videolink cursor-pointer" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><small><i class="fa fa-video mr-2"></i>Play Now</small></a></div>
                                            <?php } ?>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php 
                        for ($i=22; $i < 26; $i++) {
                            if($getAllNews[$i]['type'] == "Article"){ ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" alt="" width="110px" height="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ 
                                $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" alt="" width="110px" height="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h6 m-0 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } 
                        } ?>
                    </div>
                </div>
                
                <!-- SideBar -->
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <?php include 'follow-us.php'; ?>
                    <!-- Social Follow End -->

                    <!-- Advertisement 3 -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Advertisement 3 -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <?php 
                            for ($i=26; $i < 34; $i++) {
                                if($getAllNews[$i]['type'] == "Article"){ ?>
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://indiatvonline.in/assets/blog_images/<?php echo $getAllNews[$i]['cover_img'];?>" alt="" height="110px" width="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $getAllNews[$i]['id'];?>"><?php echo $getAllNews[$i]['title'];?></a>
                                        </div>
                                    </div>
                                <?php } else{ 
                                $video_code = explode('?v=',$getAllNews[$i]['cover_img'])[1]; ?>
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" alt="" height="110px" width="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $getAllNews[$i]['category'];?>"><?php echo $getAllNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($getAllNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $getAllNews[$i]['id'];?>" class="videolink h6 m-0 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $getAllNews[$i]['title'];?></a></div>
                                        </div>
                                    </div>
                                <?php } 
                            } ?>
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Get relevant and valuable information through email.</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <!-- <small>Lorem ipsum dolor sit amet elit</small> -->
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <?php foreach(News_Category as $key){ ?>
                                    <a href="category?news=<?php echo $key;?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $key;?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

<?php 
include "footer.php";
?>