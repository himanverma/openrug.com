<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>
<div class="banner">
    <div data-ride="carousel" class="carousel slide" id="carousel-example-captions">

        <div class="carousel-inner">
            <?php //debug($banners);exit;
            $count=1;
            foreach($banners as $banner){ ?>
                <div class="item <?php if($count==1){ echo "active";}?>">
                    <img src="<?php echo $this->Html->url('/files/banner_image/'.$banner['Banner']['image']);?>">
                    <div class="carousel-caption">
                        <h3><?php  echo $banner['Banner']['description']; $count++;?> </h3>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>


<div class="top_cat">
    <div class="row">
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
                        Exactly how you want them
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
                <?php foreach($popularGenrugs as $popularGenrug){?>
                    <a href="<?php echo $this->Html->url('/rugs/editor/'.$popularGenrug['Rug']['id']); ?>">
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <img src="/<?php echo $popularGenrug['Genrug']['path']."pre.png";?>" alt="">
                            <p><?php echo $popularGenrug['Rug']['description'];?></p>
                            <div class="add_cart">
                                <div class="col-xs-9 padding">
                                    <span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="javascript:void()" class="addtocart" id="<?php echo $popularGenrug['Genrug']['id'];?>">
                                            Add to Cart
                                        </a>
                                    </span>
                                </div>
                                <div class="col-xs-3 padding">
                                    <div class="view">
                                        <a href="<?php echo $this->Html->url('/rugs/editor/'.$popularGenrug['Rug']['id']); ?>"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </div>
</div>


<div class="popular_rug">
    <div class="row">
        <div class="col-sm-12"><br/>
            <h1>recent rug designs</h1><br/><br/>
            <div class="row">
                <?php foreach($recentGenrugs as $recentGenrug){?>
                    <a href="<?php echo $this->Html->url('/rugs/editor/'.$recentGenrug['Rug']['id']."/".$recentGenrug['Genrug']['colorstamp']); ?>">
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <img src="/<?php echo $recentGenrug['Genrug']['path']."pre.png";?>" alt="">
                            <p><?php echo $recentGenrug['Rug']['description'];?></p>
                            <div class="add_cart">
                                <div class="col-xs-9 padding">
                                    <span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="javascript:void()" class="addtocart"  id="<?php echo $recentGenrug['Genrug']['id'];?>">
                                            Add to Cart
                                        </a>
                                    </span>
                                </div>
                                <div class="col-xs-3 padding">
                                    <div class="view">
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </div>
</div>


<div class="facebook_user">
    <div class="row">
        <div class="col-sm-12">
            <h1>43 Friends <span>Like custom rugs design</span></h1>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-1.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-2.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-3.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-4.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-5.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-6.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-7.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-8.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-9.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-10.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-11.jpg" alt=""></a></div></div>
            <div class="col-sm-1 col-xs-2 padding_right1"><div class="user"><a href="#"><img src="images/user-4.jpg" alt=""></a></div></div>
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