<?php
include "header.php";

$editorsDict = array(
    1 => array("name" => "Dr. Anuj Kumar", "post" => "Editor", "image" => "https://indiatvonline.in/assets/admins/1.jpeg"),
    2 => array("name" => "Dr. Upendra Kanaujia", "post" => "Sub-Editor (Varanasi)", "image" => "https://indiatvonline.in/assets/admins/5.jpg"),
    3 => array("name" => "Ramesh Sharma", "post" => "Sub-Editor", "image" => "https://indiatvonline.in/assets/admins/2.jpeg"),
    4 => array("name" => "Harish Chandra Choudhary", "post" => "Sub-Editor", "image" => "https://indiatvonline.in/assets/admins/3.jpeg"),
    5 => array("name" => "Priya Ghosh", "post" => "Beuro Chief (Ranchi)", "image" => "https://indiatvonline.in/assets/admins/4.jpg"),
    6 => array("name" => "Vivek Verma", "post" => "Developer", "image" => "https://indiatvonline.in/assets/admins/viv1.jpg"),
    7 => array("name" => "Avishek Verma", "post" => "Graphics Designer", "image" => "https://indiatvonline.in/assets/admins/avi2.png")
);

?>


    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">

                <?php
                foreach($editorsDict as $editor){ ?>

                    <div class="col-lg-3">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="<?php echo $editor['image'];?>" style="object-fit: contain; height: 270px;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"><?php echo $editor['post'];?></a>
                                </div>
                                <a class="h6 d-block text-secondary text-uppercase font-weight-bold line2content"><?php echo $editor['name'];?></a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries/Advertisement</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                            <h6 class="text-uppercase font-weight-bold">Contact Info</h6>
                            <p class="mb-4">Post your <b>questions</b> or <b>concerns</b> or <b>advertisement proposal</b> and we will reach out to everyone individually. Also can send letter to the office address mentioned below.</p>
    						<div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Our Office</h6>
                                </div>
                                <p class="m-0">Rajpur Road, Civil lines, Delhi- 110054, India</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Email Us</h6>
                                </div>
                                <p class="m-0">indiatvonline2020@gmail.com</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Call Us</h6>
                                </div>
                                <p class="m-0">+91 94701 22223</p>
                            </div>
                        </div>
                        <h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
                        <form onsubmit="emailContactForm(); return false;" id="contactForm">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="contactFormName" id="contactFormName" class="form-control p-4" placeholder="Your Name" required="required"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="contactFormEmail" id="contactFormEmail" class="form-control p-4" placeholder="Your Email" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="contactFormSubject" id="contactFormSubject" class="form-control p-4" placeholder="Subject" required="required"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="contactFormMessage" id="contactFormMessage" rows="4" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit">Send Message</button>
                            </div>
                            <div id="contactErrMsg"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <?php include 'follow-us.php'; ?>
                    <!-- Social Follow End -->

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
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
include "footer.php";
?>