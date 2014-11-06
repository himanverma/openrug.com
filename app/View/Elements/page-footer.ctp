<footer>
    <div class="container-fluid">


        <div class="col-sm-12">

            <div class="down_arrow pull-right">
                <span><i class="fa fa-angle-double-down"></i></span>
            </div>
            <div class="footer_menu">

                <div class="menu_new">
                    <div class="footer_box_main_inn">
                        <div class="col-sm-3">
                            <ul class="footer_box_about_us">
                                <h1>Connect with us</h1>
                                <li><p><i class="fa fa-map-marker"></i>Address: #20-40 - Tower G45 <br/>Gound Floor - London UK</p></li>
                                <li><p><i class="fa fa-phone"></i>+444 (Phone) 123456</p></li>
                                <li><p><i class="fa fa-fax"></i>+123 (FAX) 0011223</p></li>
                                <li><p><i class="fa fa-info-circle"></i>info@wd-demo.com</p></li>
                                <li><p><i class="fa fa-wechat"></i>skype.mdemo</p></li>
                            </ul>
                        </div>  

                        <div class="col-sm-3"> 
                            <ul class="footer_box_about_us">
                                <h1>Information</h1>
                                <li><a href=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Delivery Information</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Terms & Conditions</a></li>
                            </ul>
                        </div> 

                        <div class="col-sm-3">
                            <ul class="footer_box_about_us">
                                <h1>My Account</h1>
                                <?php if ($authUser) { ?>
                                    <li><a href="/users/account"><i class="fa fa-angle-double-right"></i>My-Account</a></li>
                                <?php } else { ?>
                                    <li><a href="/users/add"><i class="fa fa-angle-double-right"></i>Sign In</a></li>
                                <?php } ?>
                                <li><a href="/rugs/cart"><i class="fa fa-angle-double-right"></i>View Cart</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>My Wish List</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Help</a></li>
                            </ul>
                        </div> 

                        <div class="col-sm-3">
                            <ul class="footer_box_about_us">
                                <h1>Customer Service</h1>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Returns</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i>Site Map</a></li>
                            </ul>
                        </div> 
                    </div> 
                </div>

            </div>



            <div class="col-sm-6">
                <div class="f_menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Contemporary Rugs</a></li>
                        <li><a href="#">Modern Rugs</a></li>
                        <li><a href="#">Designer Rugs</a></li>
                        <li><a href="#">Shag Rugs</a></li>
                        <li><a href="#">Traditionals</a></li>
                        <li><a href="#">Custom Rugs</a></li>
                    </ul>

                </div>
                <div class="boot_menu"> <p>Call United States Toll Free 1-800-830-4787  <a href="#">Terms & Conditions</a>   |   <a href="#">Privacy & Security </a>  |   <a href="#">Affiliate Program</a>   |   <a href="#">The Privé</a></p>

                    <p> © 1999-2014 Custom commercial RugBuilder.com- All Rights Reserved  and Desigend By <a target="_blank" href="http://mediaweb.co.il/"> MediaWeb.co.il</a>  <a href="#">Popular Searches</a>   |   <a href="#">Store Map</a>   |   <a href="#">Site Index </a>  |  <a href="#"> RSS</a></p>
                </div>

            </div>
            <div class="col-sm-2">
                <div class="footer_logo2">
                    <a href="/"><img src="<?php echo $this->Html->url('/images/logo.png'); ?>" alt=""></a>
                </div>
            </div>




            <div class="col-sm-4">
                <div class="footer_logo">
                    <div style="margin: 0 auto; width: 400px;">
                        <a href="#"><img src="<?php echo $this->Html->url('/img/paypalLogoGrey.png'); ?>" alt=""></a>
                       <!--<a href="#"><img src="<?php echo $this->Html->url('/images/f_logo1.png'); ?>" alt=""></a>-->
                        <a href="#"><img src="<?php echo $this->Html->url('/images/f_logo2.png'); ?>" alt=""></a>
                        <a href="#"><img src="<?php echo $this->Html->url('/images/f_logo3.png'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
