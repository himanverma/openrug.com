<header>
    <div class="container-fluid">
        <div class="con_inn1">
            <?php echo $this->element("page-top");?>
            <div class="col-sm-12"> 
                <div class="col-sm-2 padding">
                    <div class="logo">
                        <a href="/"><img src="<?php echo $this->Html->url('/images/logo.png'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-6 padding">
                    <div class="col-sm-12 padding" style="margin-top:20px;">
                        <div class="row">
                            <div class="col-sm-3"> 
                                <div class="social">
                                    <div class="socil_link">
                                        <span>
                                            <a href="https://www.facebook.com/modernrugs" target="_blank">  
                                                <img src="<?php echo $this->Html->url('/images/fb.png'); ?>" alt="">
                                            </a>
                                        </span>
                                        <span><a href="#"><img src="<?php echo $this->Html->url('/images/tweet.png'); ?>" alt=""></a></span>
                                        <span><a href="#"><img src="<?php echo $this->Html->url('/images/yt.png'); ?>" alt=""></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4"><div class="support"><i class="fa fa-mobile-phone"></i><p>Support 1-800-8307847 </p></div></div>
                            <div class="col-sm-5"><div class="shopping_icon"><a href="#"><i class="fa fa-shopping-cart"></i></a><p><a href="#">Shopping Cart</a></p></div></div>    
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="visitor_text">
                            <?php if ($authUser) { ?>
                                <p>You are loggedIn as <span><?php echo $authUser['User']['full_name'] ?>
                                        <a href="<?php echo $this->Html->url('/users/logout') ?>">(Logout)</a>
                                    </span></p>
                            <?php } else { ?>
                                <p>Welcome visitor you can 
                                    <span><a href="/users/login">login</a></span> or 
                                    <span><a href="/users/add"> create an account</a></span>
                                </p>
                            <?php } ?>
                        </div>
                    </div>  
                    <div class="col-sm-6 padding">
                        <div class="search">
                            <div class="col-sm-9 padding"><input name="" type="text" placeholder="Search..."></div> 
                            <div class="col-sm-3 padding"><input name="" type="submit" value="Search"></div>
                        </div>
                    </div>
                </div>
                <div class="navigat">
                    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <div class="navbar navbar-default navbar-static-top">
                            <div class="navigation_new">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="/">Home</a></li>
                                        <li class="dropdown menu-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Design <b class="caret"></b></a>    
                                            <ul class="dropdown-menu megamenu row">
                                                <li class="col-sm-12">
                                                    <ul>
                                                        <?php foreach($patterns as $_k => $_v){ ?>
                                                        <li><a href="/rugs/bypattern/<?php echo $_k; ?>"><?php echo $_v; ?></a></li>
                                                        <?php } ?>
                                                        <!--<li class="dropdown-header">Style</li>
                                                        <li><a href="#">Available glyphs</a></li>
                                                        <li><a href="#">Designer Rugs </a></li>
                                                        <li><a href="#">Felt Rugs </a></li>
                                                        <li><a href="#">Modern Abstract Rugs </a></li>
                                                        <li><a href="#">Odd Shaped Rugs </a></li>
                                                        <li><a href="#">Pop Art Rugs </a></li>
                                                        <li><a href="#">Shag Rugs </a></li>
                                                        <li><a href="#">Silk Rugs </a></li>
                                                        <li><a href="#">Textured Rugs </a></li>
                                                        <li><a href="#">Tibetan Rugs </a></li>
                                                        <li><a href="#">Acrylic Rugs </a></li>
                                                        <li><a href="#">Animal Print Rugs </a></li>
                                                        <li><a href="#">Border Rugs </a></li>
                                                        <li><a href="#">Braided Rugs </a></li>
                                                        <li><a href="#">Cotton Rugs </a></li>
                                                        <li><a href="#">Cowhide Rugs</a></li>-->
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown menu-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Color <b class="caret"></b></a>				
                                            <ul class="dropdown-menu megamenu row" style="padding: 0 5px;">
                                                <?php echo $this->element("swatch_1"); ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown menu-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Shape <b class="caret"></b></a>				
                                            <ul class="dropdown-menu megamenu row">
                                                        <li><a href="/rugs/shape/oval">Oval<br/><img src="/images/oval.png" alt=""></a></li>                                                
                                                        <li><a href="/rugs/shape/square">Square<br/><img src="/images/sh-square.png" alt=""></a></li>                                                                                                   
                                                        <li><a href="/rugs/shape/round">Round<br/><img src="/images/sh-round.png" alt=""></a></li>                                                                                                
                                                        <li><a href="/rugs/shape/rect">Rectangular<br/><img src="/images/sh-rect.png" alt=""></a></li>                                                
                                                        <li><a href="/rugs/shape/runner">Runner<br/><img src="/images/sh-runner.png" alt=""></a></li>                                                  
                                            </ul>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>

    .top_nav{
        margin-top:8%;
    }
    header {
        border-bottom:none!important;
        box-shadow: 0 2px 9px #ccc;
    }
    .con_inn {
        box-shadow: 0 7px 10px #ccc!important;
    }
    .navbar-nav > li > .dropdown-menu{
        margin-top: 0!important;
    }
    .logo{
        float: left;
        width: 100%;
        margin: 0px auto;
    }

</style>