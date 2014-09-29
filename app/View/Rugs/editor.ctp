<div class="row">
    <div class="single_pro">
        <form method="post">
        <div class="color_editor">
            <div class="col-sm-4">
                <div class="single_pro_menu">
                    <a href="#">home</a>  >  <a href="#">rugs</a>  >  <a href="#">natural</a>  >  <a href="#">tea time rug </a>
                    <p>tea time rug   <span>product no: 1276034 </span></p>
                    <div class="btn_click"><a href="#"><img src="<?php echo $this->Html->url('/images/click_here_btn.png'); ?>" alt=""></a></div>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3">
                <div class="edit_color">
                    Edit Colours:
                    <?php for($i = 0 ; $i < $colorCount; $i++){ ?>    
                    <span class="swatch-picker">
                        <img src="<?php echo $this->Html->url("/swatch/".$defaultClr[$i]['png']); ?>" alt="">
                        <div class="swatch-pick">
                            <?php echo $this->element("swatch"); ?>
                        </div>
                        <input type="hidden" name="clr_sb[]" value="<?php echo $defaultClr[$i]['clr']; ?>" />
                    </span>
                    <?php } ?>
                    </span> 
                       <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                    
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="edit_shape">
                    Edit Shape: 
                        <span class="swatch-picker">
                            <img src="<?php echo $this->Html->url("/images/shap-1.png"); ?>" alt="">
                            <div class="swatch-pick">
                                <input type="hidden" name="shp_sb" value="<?php echo $defaultShp; ?>" />
                                <table id="shape-pick" cellpadding="5">
                                    <tr>
                                        <td align="center">
                                            <img data-shp="oval" src="<?php echo $this->Html->url("/images/oval.png"); ?>" alt=""><br>
                                            <strong>Oval</strong>
                                        </td>
                                        <td align="center">
                                            <img data-shp="square" src="<?php echo $this->Html->url("/images/square.png"); ?>" alt=""><br>
                                            <strong>Square</strong>
                                        </td>
                                        <td align="center">
                                            <img data-shp="round" src="<?php echo $this->Html->url("/images/round_1.png"); ?>" alt=""><br>
                                            <strong>Round</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <img data-shp="rect" src="<?php echo $this->Html->url("/images/rectangular.png"); ?>" alt=""><br>
                                            <strong>Rectangular</strong>
                                        </td>
                                        <td></td>
                                        <td align="center">
                                            <img data-shp="runner" src="<?php echo $this->Html->url("/images/runners.png"); ?>" alt=""><br>
                                            <strong>Runners</strong>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </span>
                        <a href="#"><i class="fa fa-plus-square"></i></a>
                </div>
            </div>
        </div>
        </form>

        <div class="single_page_pro">
            <div class="col-sm-12">
                
                <div id="rug-preview">
                    <img class="well well-sm" id="big-img" src="<?php echo $this->Html->url($ims.$defaultShp.".png"); ?>"/>
                    <div class="col-sm-12 sm-p-trig">
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims.$defaultShp.".png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims.$defaultShp."1.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims.$defaultShp."2.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims.$defaultShp."3.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-4">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#rug-preview .sm-p-trig img').on("mouseenter",function(){
                    $('#big-img').attr({src: $(this).attr('src')});
                });
            });
        </script>
        <style type="text/css">
            .sm-p-trig img {
                cursor: pointer;
                height: 60px;
            }
            #big-img {
                height: 475px;
            }
        </style>
        
        
        

        <div class="calculate_price">
            <div class="col-sm-6"><h1>calculate price - <span>specify measurements:</span></h1></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <div class="select_cm">
                    <form role="form">
                        <label class="radio-inline">
                            <input type="radio" value="option1" id="inlineRadio1" name="inlineRadioOptions"> cm
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="option2" id="inlineRadio2" name="inlineRadioOptions"> feet and inches 
                        </label>

                    </form>          
                </div>
            </div>
            <div class="col-sm-12">
                <div class="calculate_price_box">
                    <div class="col-sm-6">
                        <div class="select_cm_all1">
                            <form> 
                                <p>
                                    <label>Width</label>
                                    <input name="" type="text">
                                    <label> cm     x     Length </label>
                                    <input name="" type="text">
                                    <span>cm</span>
                                </p>
                                <p>
                                    <label>Quantity</label>
                                    <select name="">
                                        <option></option>
                                    </select>
                                    <strong>your rug price: <small> £0.00</small></strong>

                                    <span class="addtocart"><a href="#"><img src="<?php echo $this->Html->url("/images/addtocart.png"); ?>" alt=""></a></span>

                                </p>               


                            </form>          
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="select_cm_all">
                            <form role="form">
                                <span>Pile depth </span>
                                <label class="radio-inline">
                                    <input type="radio" value="option1" id="inlineRadio1" name="inlineRadioOptions"> 12-14 mm
                                </label>
                                <span><img src="<?php echo $this->Html->url("/images/icon1.png"); ?>" alt=""></span>
                                <label class="radio-inline">
                                    <input type="radio" value="option2" id="inlineRadio2" name="inlineRadioOptions"> 15-18 mm 
                                </label>
                                <span><img src="<?php echo $this->Html->url("/images/icon1.png"); ?>" alt=""></span>
                                <label class="radio-inline">
                                    <input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions"> 19-21 mm
                                </label>

                            </form>          
                        </div>
                    </div>
                </div>
                <div class="poplular_custom_sizes">
                    <h1>Poplular custom sizes:</h1>
                    <div class="col-sm-2">
                        <div class="custom_sizes_box">
                            <span>140cm x 200cm</span>
                            <p>£498.99 </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom_sizes_box">
                            <span>140cm x 200cm</span>
                            <p>£498.99 </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom_sizes_box">
                            <span>140cm x 200cm</span>
                            <p>£498.99 </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom_sizes_box">
                            <span>140cm x 200cm</span>
                            <p>£498.99 </p>
                        </div>
                    </div>
                </div>


                <div class="candy_rug">
                    <div class="col-sm-7 padding">
                        <h1>candy rug <span>product no: 2077677</span></h1>
                        <p>The candy wool rug is hand made to measure and exclusive to rug couture.</p>

                        <p>Hand-tufted pure wool with a luxurious pile weight of 3000g/m² and pile depth of 12-14mm.</p>

                        <p>The candy rug is priced at £178/m² and available in extra large sizes of up to 500cm x 1200cm (16ft x 40ft).</p>

                        <p>This rug is fully customisable. Colours and shape can be edited using the controls above the rug.</p>
                    </div>
                    <div class="col-sm-5 padding">
                        <div class="candy_rug_right">
                            <h1>Your custom size wool rug at a glance.. </h1>

                            <div class="col-xs-6 padding">
                                <p><span><img src="<?php echo $this->Html->url("/images/icon2.png"); ?>" alt=""></span>100% pure wool</p>
                                <p><span><img src="<?php echo $this->Html->url("/images/icon3.png"); ?>" alt=""></span>Heavy cotton backing </p>
                                <p><span><img src="<?php echo $this->Html->url("/images/icon1.png"); ?>" alt=""></span>Hand-tufted12-14mm pile depth</p>
                            </div>

                            <div class="col-xs-6 padding">                  
                                <p><span><img src="<?php echo $this->Html->url("/images/icon4.png"); ?>" alt=""></span>6 Weeks delivery</p>
                                <p><span><img src="<?php echo $this->Html->url("/images/icon5.png"); ?>" alt=""></span>Wool pile weight3000g/m²</p>
                                <p><span><img src="<?php echo $this->Html->url("/images/icon6.png"); ?>" alt=""></span>No child labour used</p>

                            </div>

                        </div>
                    </div>
                </div>



                <div class="poplular_rug">
                    <h1>popular rug designs</h1>  
                    <div class="row">

                        <div class="col-sm-12 padding">
                            <div class="pro_right">
                                
                                
                                <?php foreach($rugDiscounts as $rug){
                                        foreach($rug['Genrug'] as $genrug){?>
                                            <div class="col-md-2 col-sm-4 col-xs-6">
                                                <div class="product_main">
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
                                <?php }}?>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="top_rug">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Top rug designs</h1>
                            <div class="row">
                                <?php foreach($popularGenrugs as $popularGenrug){?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="pro">
                                            <img src="/<?php echo $popularGenrug['Genrug']['path']."pre.png";?>" alt="">
                                            <p><?php echo $popularGenrug['Rug']['description'];?></p>
                                            <div class="add_cart">
                                                <div class="col-xs-9 padding">
                                                    <span><i class="fa fa-shopping-cart"></i><a href="#">Add to Cart</a></span></div>
                                                <div class="col-xs-3 padding">
                                                    <div class="view">
                                                        <a href="#"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .edit_color td{
        padding: 2px
    }
    .swatch-pick{
        display: none;
        z-index: 99999; padding: 4px; position: absolute; 
        top: 30px; left: -20px; 
        background: #ffffff; 
        border-radius: 4px; 
        box-shadow: 0 0 4px rgba(50,50,50,0.6);
        border: 1px solid #ccc;
    }
    .swatch-picker {
        height: 32px;
        padding-bottom: 11px;
    }
    .edit_shape td{
        padding: 5px;
        border-radius: 7px;
    }
    .edit_shape td:hover{
        box-shadow: 0 0 4px rgba(55,55,55,0.6);
    }
    .trig-clr:hover {
        cursor: pointer;
        box-shadow: 0 0 4px rgba(55,55,55,0.6);
    }
</style>    
<script type="text/javascript">
    $(document).ready(function(){
        $('.swatch-picker').hover(function(){
            $(this).find('.swatch-pick').show();
            $(this).css({'box-shadow':'0 0 4px rgba(55,55,55,0.6)'});
        },function(){
            $(this).find('.swatch-pick').hide();
            $(this).css({'box-shadow':'none'});
        });
        
        $('.trig-clr').on("click",function(){
            var clr = $(this).data().clr ; 
            console.log($(this).parent().parent().parent().parent().parent());
            $(this).parent().parent().parent().parent().parent().parent().find('input').val(clr);
            $(this).parents('form').submit();
        });
        $('#shape-pick img').on("click",function(){
            var shp = $(this).data().shp;
            console.log(shp);
            $(this).parent().parent().parent().parent().parent().find('input').val(shp);
            $(this).parents('form').submit();
        });
    });
</script>    