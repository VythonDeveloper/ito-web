<?php 
include 'function.inc.php';
include 'constant.inc.php';
$script_filename =  explode('/',$_SERVER['SCRIPT_FILENAME']);
$curr_path = $script_filename[count($script_filename)-1];

$home_active = $aboutUs_active = $advertise_active = '';

if($curr_path == 'index' || $curr_path == 'index.php'){
  $home_active = "active";
}
elseif($curr_path == 'about-us' || $curr_path == 'about-us.php'){
  $aboutUs_active = "active";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>India TV Online - News, Videos, Bulletins</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/web_images/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Jquery Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Magnific Popup Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Style -->
    <style type="text/css">
        .mfp-hide{
            display: none !important;
        }

        iframe{
            margin-left: 80px;
        }

        button.mfp-close{
            overflow: visible;
            cursor: pointer;
            background: white;
            border: 0;
            -webkit-appearance: none;
            display: block;
            outline: 0;
            padding: 0;
            z-index: 1046;
            box-shadow: none;
        }

        .mfp-close{
            width: 44px;
            height: 44px;
            border-radius: 50px;
            line-height: 44px;
            position: absolute;
            right: 40px;
        }

        .line2content{
            display: -webkit-box !important; 
            -webkit-line-clamp: 2; 
            -webkit-box-orient: vertical; 
            overflow: hidden; 
            text-overflow: ellipsis;
            cursor: pointer;
        }
        .cursor-pointer{
            cursor: pointer;
        }
        </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#"><?php echo date('l, F d, Y');?></a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="#">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.youtube.com/channel/UC_qQQUU2ssXXsq_2UFiZJ_w" target="_blank"><small class="fab fa-youtube"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://twitter.com/IndiaTVOnline1" target="_blank"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.linkedin.com/in/india-tv-online-b478b5217/" target="_blank"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.instagram.com/indiatvonline/" target="_blank"><small class="fab fa-instagram"></small></a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row" style="height: 200px; overflow-x: hidden;">
            <video  autoplay muted loop style="object-fit: cover">
                <source src="assets/web_images/ito.mp4" type="video/mp4">
            </video>
        </div>
        <!-- <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index" class="navbar-brand p-0 d-none d-lg-block">
                    <h3 class="m-0 display-4 text-uppercase text-primary">India<span class="text-secondary font-weight-normal">TV Online</span></h3>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
            </div>
        </div> -->
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">India<span class="text-white font-weight-normal">TV Online</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index" class="nav-item nav-link <?php echo $home_active;?>">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <?php foreach(News_Category as $key){?>
                                <a href="category?news=<?php echo $key;?>" class="dropdown-item"><?php echo $key;?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="about-us" class="nav-item nav-link <?php echo $aboutUs_active;?>">About Us</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->