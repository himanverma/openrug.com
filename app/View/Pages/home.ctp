<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <div class="banner_left">
                <img src="images/new_left.png" alt="">
            </div>
        </div>
        <div class="col-sm-8"> 
            <div class="banner">
                <div data-ride="carousel" class="carousel slide" id="carousel-example-captions">
                    <div class="carousel-inner">
                        <?php
                        //debug($banners);exit;
                        $count = 1;
                        foreach ($banners as $banner) {
                            ?>
                            <div class="item <?php if ($count == 1) {
                                echo "active";
                            } ?>">
                                <img width="100%" src="<?php echo $this->Html->url('/files/banner_image/' . $banner['Banner']['image']); ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $banner['Banner']['description'];
                            $count++; ?> </h3>
                                </div>
                            </div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="top_cat">
    <!--<div class="row">
        <div class="col-sm-4">
            <div class="col-sm-6">
                <div class="cat_img">
                    <img src="images/choose_shape.png" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <h1>1.CHOOSE YOUR SHAPE</h1>
                <p>Select from Hundr - eds of  essential Rug shapes .</p>
                <a href="#">Read More...</a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="col-sm-6">
                <div class="cat_img">
                    <img src="images/color.png" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <h1>2.CHOOSE YOUR colour</h1>
                <p>Play with over 300  fabrics to select the shade and texture you want.</p>
                <a href="#">Read More...</a>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="col-sm-6">
                <div class="cat_img">
                    <img src="images/shipping.png" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <h1>3.WORLD SHIPPING</h1>
                <p>Your Rug  will be delivered via DHL Express within 8 weeks.</p>
                <a href="#">Read More...</a>
            </div>
        </div>



    </div>-->
    <h3>Welcome to Rugbuilder.com<span>Customize your colors, shape and size from thousands of our award-wining designs</span></h3>
    <div class="row">
        

                            <div class="col-sm-4">
                                <div class="online_shapes_box1">
                                        <a href="/Browses/browse"><img alt="" src="images/b1.jpg"></a>
                                        <h1>choose your design<span>We have thousand and are adding more everyday</span></h1>
                                </div>
                            </div>         
                            <div class="col-sm-4">
                            	<div class="online_shapes_box1">
                                	<a href="/Browses/shape"><img alt="" src="images/b2.jpg"></a>
                                    <h1>Customize it<span>Pick your colors,shape,size and other options</span></h1>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                            	<div class="online_shapes_box1">
                                	<a href="/Browses/color"><img alt="" src="images/b3.jpg"></a>
                                    <h1>approve your rug<span>delivered in 4-6 weeks</span></h1>
                                </div>
                            </div>
                            
                            
                            
                            
                            </div>
</div>


<div class="welcome_text">
    <div class="row">
        <div class="col-sm-12">
            <h1>WELCOME TO THE AMERICAN  RUGS DESIGN EXPERIENCE.</h1>
            <p>Custom Rugs , Designed by YOU.</p>

            <div class="welcome_box">
                <div class="col-sm-3 padding_right">
                    <div class="welcome_box_inn">
                        Exactly how you want <br/>them
                    </div>
                </div>

                <div class="col-sm-3 padding_right">
                    <div class="welcome_box_inn">
                        Design your own Rug  with our Rug  Designer
                    </div>
                </div>
                <div class="col-sm-3 padding_right">
                    <div class="welcome_box_inn">
                        Choose your own Rug  to Customize.
                    </div>
                </div>
                <div class="col-sm-3 padding_right">
                    <div class="welcome_box_inn">
                        Create your own Rug  with Unique Designs.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="popular_rug">
    <div class="row">
        <div class="col-sm-12"><br/>
            <h1>popular rug designs</h1><br/><br/>
            <div class="row">
<?php foreach ($popularGenrugs as $popularGenrug) { ?>
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Rug']['id']); ?>">
                                 <img src="/<?php echo $popularGenrug['Genrug']['path'] . "pre.png"; ?>" alt="">
                            </a> 
                            <p><?php echo $popularGenrug['Rug']['description']; ?></p>
                            <strong><?php echo $popularGenrug['Rug']['description']; ?>$ 250.00</strong><!-- this is custom changes please edit correct code-->
                            <div class="add_cart">
                                <div class="col-sm-9 padding">
                                    <span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="javascript:void()" class="addtocart" id="<?php echo $popularGenrug['Genrug']['id']; ?>">
                                            Add to Cart
                                        </a>
                                    </span>
                                </div>
                                <div class="col-sm-3 padding">
                                    <div class="view">
                                        <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Rug']['id']); ?>">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<?php } ?>
            </div>
        </div>
    </div>
</div>


<div class="popular_rug">
    <div class="row">
        <div class="col-sm-12"><br/>
            <h1>recent rug designs</h1><br/><br/>
            <div class="row">
<?php foreach ($recentGenrugs as $recentGenrug) { ?>
                    <div class="col-sm-2 col-xs-6" >
                            <div class="pro">
                                 <a href="<?php echo $this->Html->url('/rugs/editor/' . $recentGenrug['Rug']['id'] . "/" . $recentGenrug['Genrug']['colorstamp']); ?>">
                                        <img src="/<?php echo $recentGenrug['Genrug']['path'] . "pre.png"; ?>" alt="">
                                 </a>

                                <p><?php echo $recentGenrug['Rug']['description']; ?></p>
                                <strong><?php echo $popularGenrug['Rug']['description']; ?>$ 250.00</strong><!-- this is custom changes please edit correct code-->
                                <div class="add_cart">
                                    <div class="col-sm-9 padding">
                                        <span>
                                            <i class="fa fa-shopping-cart"></i>
                                            <a href="javascript:void()" class="addtocart"  id="<?php echo $recentGenrug['Genrug']['id']; ?>">
                                                Add to Cart
                                            </a>
                                        </span>
                                    </div>
                                    <div class="col-sm-3 padding">
                                        <div class="view">
                                            <a href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } ?>
            </div>
        </div>
    </div>
</div>


<div class="facebook_user">
    <div class="row">
        <div class="col-sm-12">
            <iframe width="100%" height="270" frameborder="0" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmodernrugs&width=910&height=258&colorscheme=light&show_faces=true&header=false&stream=false&show_border=false&appId=754920931213739" framescroll="no"></iframe>
        </div>
    </div>

</div>
<style>

    .col-xs-9.padding > a {
        float: left;
        margin: 0 6% 0 0;
        width: auto;
    }

    .addtocart {
        color: #505050;
        float: left;
        font-size: 11px;
        line-height: 23px;
    }
</style>