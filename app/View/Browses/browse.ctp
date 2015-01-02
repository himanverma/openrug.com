<div class="row">
    <div class="col-sm-3">
        <div class="category">
            <div class="category_box">
                <h1>Clearance Rugs 1</h1>
                <ul>
                    <h2>Select Size:</h2>
                    <li><a href="#">2x3 - 4x6</a></li>
                    <li><a href="#">5x8 - 6x9</a></li>
                    <li><a href="#">8x10 & Up</a></li>
                    <li><a href="#">Round</a></li>
                    <li><a href="#">Runner</a></li>
                    <li><a href="#">Square</a></li>
                </ul>
                <p>Can't find the size you want? Learn about our <span>custom rugs program.</span></p>
            </div>
        </div>

        <div class="category">
            <div class="category_box">
                <h1>Search Within Rugs 1:</h1>
                <select name="">
                    <option>All Sizes</option>
                    <option>All Sizes</option>
                </select>

                <select name="">
                    <option>All Colors</option>
                    <option>All Colors</option>
                </select>
                <p><input name="" type="submit" value="Submit"></p>
            </div>
        </div>

        <div class="category">
            <div class="category_box">
                <h1>Search Sitewide:</h1>
                <select name="">
                    <option>All Sizes</option>
                    <option>All Sizes</option>
                </select>

                <select name="">
                    <option>All Colors</option>
                    <option>All Colors</option>
                </select>
                <p><input name="" type="submit" value="Submit"></p>
            </div>
        </div>


        <div class="clearence">
            <h1>clearance rugs</h1>
            <p>Clearance rugs Rugs Clearance Sale Save 50% on our overstocked items while they are still in stock.</p><p>

                FREE immediate delivery anywhere in the continental USA within 10 business days or less!</p><p>

                orary, Casual, Outdoor, Wool Cotton and
                more at clearance prices, don''t miss this spectacular clearance sale.</p><p>

                FREE fast delivery anywhere in the lower 48 US states within 10 business days or less! Discount Wool Rugs.</p>
            <a href="#">View More...</a>
        </div>

    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="pro_right">
                
                
                <?php foreach($rugs as $rug){
                    foreach($rug['Genrug'] as $genrug){?>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="product_main">
                                <div class="offer"><?php echo $rug['Rug']['discount']; ?>% <br>OFF</div>
                                <img alt="" src="<?php echo $this->Html->url('../'.$genrug['path']."pre.png"); ?>">
                                <p><?php echo $rug['Rug']['description']; ?></p>
                                <div class="add_cart2">
                                    <span><i class="fa fa-shopping-cart"></i><a href="#">Add to Cart</a></span>
                                    <div class="rupee">
                                        <?php $aa=($genrug['price']*$rug['Rug']['discount'])/100; 
                                            $bb = $genrug['price']-$aa;
                                        ?>
                                        <p>$<?php echo $bb;?>   <span>$<?php echo $genrug['price']; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                }?>
            </div>
        </div>
    </div>
</div>



<!--
<div class="footer_new">
        <div class="container">
    <div class="row">
        <div class="col-sm-8">
                <div class="footer_new_nav">
            <label for="show-menu" class="show-menu">Show Menu</label>
        <input id="show-menu" role="button" type="checkbox">
          <ul id="menu">
                                                    
                <li>
                        <a href="#">Home</a>
                        <ul class="hidden">
                                <li><a href="#">Botanical Rugs</a></li>
               	<li><a href="#">Kids Rugs </a></li>	
                <li><a href="#">Leather rugs</a></li> 	
                <li><a href="#">Felt Rugs</a></li> 	
                <li><a href="#">Shag Rugs</a></li> 	
                <li><a href="#">Sisal & Jute</a></li>
                                <li><a href="#">Bamboo Rugs</a></li> 	
                <li><a href="#">Sheepskin Rugs</a></li> 	
                <li><a href="#">Cowhide Rugs </a></li>	
                <li><a href="#">Odd Shapes </a></li>	
                <li><a href="#">Flokati Rugs</a></li> 	
                <li><a href="#">Outdoor Rugs</a></li>
                        </ul>
                </li>
                <li><a href="#">Contemporary Rugs</a></li>
        <li><a href="#">Modern Rugs</a></li>
        <li><a href="#">Designer Rugs</a></li>
        <li><a href="#">Shag Rugs</a></li>
        <li><a href="#">Traditionals</a></li>
        <li><a href="#">Custom Rugs</a></li>
        </ul>
        </div>
        </div>
        <div class="col-sm-4">
                <div class="contact_no">
                <h1>0123-456-7890</h1>
                <p>30 day satisfaction gurantee<br/>
<span>FREE</span> Shipping</p>
            </div>
        </div>
    </div>
        </div>
</div>-->