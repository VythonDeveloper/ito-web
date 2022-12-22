<?php
if(isset($_GET['article'])){
    $newsId = $_GET['article'];
}
// else{
//     header("Location:index");
// }
include "header.php";
$getArticleById = getArticleById($newsId);
$get5RandomArticle = get5RandomArticle();
$get5RandomNews = get5RandomNews();
?>


    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            <?php 
                            for($i = 0; $i < 5; $i++){?>
                                <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="single?article=<?php echo $get5RandomArticle[$i]['id'];?>"><?php echo $get5RandomArticle[$i]['title'];?></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="https://indiatvonline.in/assets/blog_images/<?php echo $getArticleById['cover_img'];?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="category?news=<?php echo $getArticleById['category'];?>"><?php echo $getArticleById['category'];?></a>
                                <a class="text-body"><?php echo date('M j, Y', strtotime($getArticleById['updated_on']));?></a>
                            </div>
                            <h2 class="mb-3 text-secondary text-uppercase font-weight-bold"><?php echo $getArticleById['title'];?></h2>
                            <?php echo $getArticleById['content'];?>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-thumbs-up mr-2"></i>
                                <span>Hit a like</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <!-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum.</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <?php include 'follow-us.php'; ?>
                    <!-- Social Follow End -->

                    <!-- Advertisement 7 -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Advertisement 7 -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <?php 
                            for ($i=0; $i < 5; $i++) {
                                if($get5RandomNews[$i]['type'] == "Article"){ ?>
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://indiatvonline.in/assets/blog_images/<?php echo $get5RandomNews[$i]['cover_img'];?>" alt="" height="110px" width="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $get5RandomNews[$i]['category'];?>"><?php echo $get5RandomNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($get5RandomNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold line2content" href="single?article=<?php echo $get5RandomNews[$i]['id'];?>"><?php echo $get5RandomNews[$i]['title'];?></a>
                                        </div>
                                    </div>
                                <?php } else{ 
                                $video_code = explode('?v=',$get5RandomNews[$i]['cover_img'])[1]; ?>
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img src="https://img.youtube.com/vi/<?php echo $video_code;?>/0.jpg" alt="" height="110px" width="110px">
                                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $get5RandomNews[$i]['category'];?>"><?php echo $get5RandomNews[$i]['category'];?></a>
                                                <a class="text-body"><small><?php echo date('M j, Y', strtotime($get5RandomNews[$i]['updated_on']));?></small></a>
                                            </div>
                                            <div class = "videoBtn"><a id="videolink<?php echo $get5RandomNews[$i]['id'];?>" class="videolink h6 m-0 text-secondary text-uppercase font-weight-bold line2content" data-url="https://www.youtube.com/embed/<?php echo $video_code;?>"><?php echo $get5RandomNews[$i]['title'];?></a></div>
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