<!-- Video Player -->

<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){ ?>

    <div id="videoStory" class="mfp-hide">
        <iframe id="videoPlayer" src="https://www.youtube.com/embed/fxWrFyUDW4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

<?php } else{ ?>
    <div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
        <iframe id="videoPlayer" width="853" height="480" src="https://www.youtube.com/embed/fxWrFyUDW4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<?php } ?>
<!-- Video Player -->

<!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Rajpur Road, Civil lines, Delhi- 110054, India</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+91 94701 22223</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>indiatvonline2020@gmail.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.youtube.com/channel/UC_qQQUU2ssXXsq_2UFiZJ_w" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://www.instagram.com/indiatvonline/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://twitter.com/IndiaTVOnline1" target="_blank"><i class="fab fa-twitter"></i></a>
                   <a class="btn btn-lg btn-secondary btn-lg-square" href="https://www.linkedin.com/in/india-tv-online-b478b5217/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    
                </div>
            </div>

            <?php $get5RandomArticle = get5RandomArticle();?>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                <?php
                for($i = 0; $i < 3; $i++){ ?>
                    <div class="mb-3">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category?news=<?php echo $get5RandomArticle[$i]['category'];?>"><?php echo $get5RandomArticle[$i]['category'];?></a>
                            <a class="text-body"><small><?php echo date('M j, Y', strtotime($get5RandomArticle[$i]['updated_on']));?></small></a>
                        </div>
                        <a class="small text-body text-uppercase font-weight-medium line2content" href="single?article=<?php echo $get5RandomArticle[$i]['id'];?>"><?php echo $get5RandomArticle[$i]['title'];?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <?php foreach(News_Category as $key){?>
                        <a href="category?news=<?php echo $key;?>" class="btn btn-sm btn-secondary m-1"><?php echo $key;?></a>
                    <?php } ?>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Our Editors</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="./assets/admins/1.jpeg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="./assets/admins/5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="./assets/admins/2.jpeg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="./assets/admins/3.jpeg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="./assets/admins/4.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">India TV Online</a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		Design by <a href="https://htmlcodex.com">HTML Codex</a><br>
        Distributed by <a href="https://themewagon.com">ThemeWagon</a>
    </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function(){
        $('.videoBtn a').click(function(e) {
            e.preventDefault();
            // $('.videolink').click(function () {
            let videoUrl = $(this).attr("data-url");
            $("#videoPlayer").attr("src",videoUrl);
       
            $.magnificPopup.open({
                items: {
                    src: $('#videoStory'),
                    type: 'inline',
                    callbacks: {
                        beforeOpen: function () {
                            if ($(window).width() < 700) {
                                this.st.focus = false;
                            } else {
                                this.st.focus = '#name';
                            }
                        }
                    }
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script type="text/javascript">
    function _(el){
        return document.getElementById(el);
    }
    function emailContactForm(){
        // b4099a18b5620b6bcc5ca84555a33164
        // alert(_("contactFormName").value);
        $("#contactForm").LoadingOverlay("show");
        $.ajax({
            url: "https://formsubmit.co/ajax/b4099a18b5620b6bcc5ca84555a33164",
            method: "POST",
            data: {
                _template: "box",
                _cc: "vivekdgp01@gmail.com",
                Name: _("contactFormName").value,
                Email: _("contactFormEmail").value,
                _subject: _("contactFormSubject").value,
                Message: _("contactFormMessage").value
            },
            dataType: "json",
            success: function(result){
                _("contactErrMsg").innerHTML = "<p class=\"text-success pt-3\"><b>Success! Your post is emailed to customer care. They will reach out within 3 hours. Thanks</b></p>";
                _("contactForm").reset();
                $("#contactForm").LoadingOverlay("hide", true);
            }
        });
    }
</script>