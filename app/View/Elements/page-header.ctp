<header>
    
    <div class="container-fluid">
        <div class="con_inn1">
            <?php
        echo $this->element("page-top");
        ?>
        <div class="col-sm-12"> 
            <div class="col-sm-2 padding">
                <div class="logo">
                <a href="/"><img src="<?php echo $this->Html->url('/images/logo.png');?>" alt=""></a>
            </div>
            </div>
            
            <div class="col-sm-6">
                <div class="top_nav">
                    <ul>
                        <li><a href="#" class="active">Shop Online</a></li> 
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Shop Locator</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search">
                    <div class="col-sm-9 padding"><input name="" type="text" value="Search..."></div>
                    <div class="col-sm-3 padding"><input name="" type="submit" value="Search"></div>
                </div>
            </div>
            
            <div class="col-sm-1 padding">
                <div class="social">
        <div class="socil_link">
            <?php if($authUser){?>
                <a href="<?php echo $this->Html->url('/users/info')?>"> My Account </a>
<!--                <a href="#">Email Updates</a>
                <a href="#">Wish List</a>-->
                <a href="#">Shopping Bag (0)</a>
            <?php }?>
                <span>
                    <a href="https://www.facebook.com/modernrugs" target="_blank">
                        <img src="<?php echo $this->Html->url('/images/fb.png');?>" alt="">
                    </a>
                </span>
            <span><a href="#"><img src="<?php echo $this->Html->url('/images/tweet.png');?>" alt=""></a></span>
            <span><a href="#"><img src="<?php echo $this->Html->url('/images/yt.png');?>" alt=""></a></span>
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
                                    <li><a href="#about">Contemporary Rugs</a></li>
                                    <li><a href="#contact">Modern Rugs</a></li>
                                    <li><a href="#contact">Designer Rugs</a></li>
                                    <li><a href="#contact">Shag Rugs</a></li>
                                    <li><a href="#contact">Traditionals</a></li>

                                    <!--<li class="dropdown menu-large">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Product Listing <b class="caret"></b> </a>
                              <ul class="dropdown-menu megamenu row">
                                <li>
                    <div class="col-sm-6 col-md-3">
                      <a href="#" class="thumbnail">
                                    <img src="img/technology.jpg" />
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                    <img src="img/technology1.jpg" />
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                    <img src="img/technology2.jpg" />
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                     <a href="#" class="thumbnail">
                                    <img src="img/technology3.jpg" />
                      </a>
                        </div>
                                                    </li>
                              </ul>
                        </li>-->

                                    <li class="dropdown menu-large">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Traditionals <b class="caret"></b></a>				
                                        <ul class="dropdown-menu megamenu row">
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Glyphicons</li>
                                                    <li><a href="#">Available glyphs</a></li>
                                                    <li class="disabled"><a href="#">How to use</a></li>
                                                    <li><a href="#">Examples</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdowns</li>
                                                    <li><a href="#">Example</a></li>
                                                    <li><a href="#">Aligninment options</a></li>
                                                    <li><a href="#">Headers</a></li>
                                                    <li><a href="#">Disabled menu items</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Button groups</li>
                                                    <li><a href="#">Basic example</a></li>
                                                    <li><a href="#">Button toolbar</a></li>
                                                    <li><a href="#">Sizing</a></li>
                                                    <li><a href="#">Nesting</a></li>
                                                    <li><a href="#">Vertical variation</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Button dropdowns</li>
                                                    <li><a href="#">Single button dropdowns</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Input groups</li>
                                                    <li><a href="#">Basic example</a></li>
                                                    <li><a href="#">Sizing</a></li>
                                                    <li><a href="#">Checkboxes and radio addons</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Navs</li>
                                                    <li><a href="#">Tabs</a></li>
                                                    <li><a href="#">Pills</a></li>
                                                    <li><a href="#">Justified</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Navbar</li>
                                                    <li><a href="#">Default navbar</a></li>
                                                    <li><a href="#">Buttons</a></li>
                                                    <li><a href="#">Text</a></li>
                                                    <li><a href="#">Non-nav links</a></li>
                                                    <li><a href="#">Component alignment</a></li>
                                                    <li><a href="#">Fixed to top</a></li>
                                                    <li><a href="#">Fixed to bottom</a></li>
                                                    <li><a href="#">Static top</a></li>
                                                    <li><a href="#">Inverted navbar</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="dropdown menu-large">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Custom Rugs <b class="caret"></b></a>				
                                        <ul class="dropdown-menu megamenu row">
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Glyphicons</li>
                                                    <li><a href="#">Available glyphs</a></li>
                                                    <li class="disabled"><a href="#">How to use</a></li>
                                                    <li><a href="#">Examples</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Dropdowns</li>
                                                    <li><a href="#">Example</a></li>
                                                    <li><a href="#">Aligninment options</a></li>
                                                    <li><a href="#">Headers</a></li>
                                                    <li><a href="#">Disabled menu items</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Button groups</li>
                                                    <li><a href="#">Basic example</a></li>
                                                    <li><a href="#">Button toolbar</a></li>
                                                    <li><a href="#">Sizing</a></li>
                                                    <li><a href="#">Nesting</a></li>
                                                    <li><a href="#">Vertical variation</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Button dropdowns</li>
                                                    <li><a href="#">Single button dropdowns</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header">Input groups</li>
                                                    <li><a href="#">Basic example</a></li>
                                                    <li><a href="#">Sizing</a></li>
                                                    <li><a href="#">Checkboxes and radio addons</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Navs</li>
                                                    <li><a href="#">Tabs</a></li>
                                                    <li><a href="#">Pills</a></li>
                                                    <li><a href="#">Justified</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <img src="images/color.png" alt="">
                                            </li>
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