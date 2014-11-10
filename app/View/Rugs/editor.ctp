<div class="row">
    <div class="single_pro">
        <form id="upd-clr-shp" method="post">
            <div class="color_editor">
                <div class="col-sm-3">
                    <div class="single_pro_menu">
                        <a href="#">home</a>  >  <a href="#">rugs</a>  >  <a href="#">natural</a>  >  <a href="#">tea time rug </a>
                        <p>tea time rug   <span>product no: 1276034 </span></p>
                        <div class="btn_click"><a href="#"><img src="<?php echo $this->Html->url('/images/click_here_btn.png'); ?>" alt=""></a></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="edit_color">
                        Edit Colours:
                        <?php  for ($i = 0; $i < $colorCount; $i++) { ?>    
                            <span class="swatch-picker">
                                <img style="width:16px; height: 16px;" src="tst" onerror="this.src = '/swatch/' + swt['<?php echo $defaultClr[$i]['swt']; ?>'].file" alt="">
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
                <div class="col-sm-2">
                    <div class="edit_shape">
                        Edit Shape: 
                        <span class="swatch-picker">
                            <img style="height:16px" src="<?php echo $this->Html->url("/images/sh-" . $defaultShp . ".png"); ?>" alt="">
                            <div class="swatch-pick">
                                <input type="hidden" name="shp_sb" value="<?php echo $defaultShp; ?>" />
                                <table id="shape-pick" cellpadding="5">
                                    <tr>
                                        <td align="center">
                                            <img data-shp="oval" src="<?php echo $this->Html->url("/images/sh-oval.png"); ?>" alt=""><br>
                                            <strong>Oval</strong>
                                        </td>
                                        <td align="center">
                                            <img data-shp="square" src="<?php echo $this->Html->url("/images/sh-square.png"); ?>" alt=""><br>
                                            <strong>Square</strong>
                                        </td>
                                        <td align="center">
                                            <img data-shp="round" src="<?php echo $this->Html->url("/images/sh-round.png"); ?>" alt=""><br>
                                            <strong>Round</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <img data-shp="rect" src="<?php echo $this->Html->url("/images/sh-rect.png"); ?>" alt=""><br>
                                            <strong>Rectangular</strong>
                                        </td>
                                        <td></td>
                                        <td align="center">
                                            <img data-shp="runner" src="<?php echo $this->Html->url("/images/sh-runner.png"); ?>" alt=""><br>
                                            <strong>Runners</strong>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </span>
                        <a href="#"><i class="fa fa-plus-square"></i></a>
                    </div>
                </div>
            
                <div class="col-sm-5 sm-p-trig">
                            <div class="im col-sm-3">
                                <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                            </div>
                            <div class="im col-sm-3">
                                <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "1.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                            </div>
                            <div class="im col-sm-3">
                                <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "2.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                            </div>
                            <div class="im col-sm-3">
                                <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "3.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                            </div>
                        </div>
</div> 
        </form>

        <div class="single_page_pro">
            <div class="col-lg-12">
                <div class="col-lg-9">
                    <div id="rug-preview">
                        <img align="center" class="well well-sm" style="height: auto; width: 90%;" id="big-img" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="pull-right" style="text-transform: uppercase; margin-top: 20px;">SKU: <?php
                        $sku_pre = md5($crug['name']);
                        $sku_pre = str_split($sku_pre, 3);
                        echo $sku_pre[0] . ((int) ($crug['id']) + 487);
                        ?></h5>
                    <h2><?php echo $crug['name']; ?></h2>
                    <hr>
                    <div>
                        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                        <script type="text/javascript">stLight.options({publisher: "9fd7ddb9-da0d-4b7d-83fd-987ccdd7c64d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                        <span class='st_facebook' displayText='Facebook'></span>
                        <span class='st_twitter' displayText='Tweet'></span>
                        <span class='st_pinterest' displayText='Pinterest'></span>
                        <span class='st_googleplus' displayText='Google +'></span>
                    </div>
                    <div style="margin-top: 30px;  font-size: 12pt;">
                        <div class="col-lg-12">
                            <div class="col-sm-6"><b>Pattern : </b></div>
                            <div class="col-sm-6"><?php echo $crug['pattern']; ?></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-sm-6"><b>Price/sq.ft. : </b></div>
                            <div class="col-sm-6">USD <?php echo round($crug['price'], 2); ?></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-sm-6"><b>Shape : </b></div>
                            <div class="col-sm-6"><?php echo $defaultShp == "rect" ? "RECTANGULAR" : strtoupper($defaultShp); ?></div>
                        </div>

                        <?php if ($crug['discount'] != 0) { ?>
                            <div class="col-lg-12" style="color: green;">
                                <div class="col-sm-8"><b>Discount : </b></div>
                                <div class="col-sm-4"><?php echo $crug['discount']; ?>%</div>
                            </div>
                        <?php } ?>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Size<br>
                                    <a style="font-size:10px;" href="#">Custom Size Inquiry</a>
                                </th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <!--<select name="approx_size" class="form-control sm" id="approx_size"  title="Size" placeholder="Select Size"><option value="12">2 x 3</option><option value="13">3 x 5</option><option value="14">4 x 6</option><option value="15">5 x 8</option><option value="23">8' Round</option><option value="29">8' Runner</option><option value="6">8' Square</option><option value="16">6 x 9</option><option value="22">6' Round</option><option value="28">6' Runner</option><option value="5">6' Square</option><option value="17">8 x 10</option><option value="19">10 x 14</option><option value="18">9 x 12</option><option value="20">12 x 15</option><option value="24">10' Round</option><option value="25">12' Round</option><option value="26">14' Round</option><option value="27">4' Runner</option><option value="30">10' Runner</option><option value="31">12' Runner</option><option value="3">14' Runner</option><option value="4">4' Square</option><option value="7">10' Square</option><option value="108">16' Runner</option><option value="21">4' Round</option><option value="198">5' Round</option><option value="8">12' Square</option><option value="9">14' Square</option><option value="97">Octagon</option><option value="100">Shapes</option><option value="11">Sample</option><option value="101">Oval</option><option value="105">12 x 18</option><option value="104">15 x 20</option><option value="207">Oversize</option></select>-->
                                    <select data-bind="options: sizes, optionsText: 'label', optionsValue: 'label' , value:size" class="form-control sm" id="approx_size"  title="Size" placeholder="Select Size"></select>
                                </td>
                                <td>
                                    <select id="odr-qty" class="form-control sm" data-bind="value:qty ">
                                        <?php for ($ic = 1; $ic <= 10; $ic++) { ?>
                                            <option value="<?php echo $ic; ?>"><?php echo $ic; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <span style="color: green; font-size: 12pt;">
                                        $<b data-bind="text:total"></b>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button data-bind="click:add2cart" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.sm-p-trig img').on("mouseenter", function() {
                    $('#big-img').attr({src: $(this).attr('src')});
                });
            });
        </script>
        <style type="text/css">
            .sm-p-trig img {
                cursor: pointer;
                height: auto;
            }
            #big-img {
                height: 475px;
                background:none;
                box-shadow:none;
                border:none;
            }
            #rug-preview {
                
                border-right:1px solid #ccc;
            }
        </style>
        <div class="calculate_price">
            <div class="col-sm-12">
                <div class="candy_rug">
                    <div class="col-sm-7 padding">
                        <h1>candy rug <span>product no: 2077677</span></h1>
                        <p>The candy wool rug is hand made to measure and exclusive to rug builder.</p>

                        <p>Hand-tufted pure wool with a luxurious pile weight of 3000g/m² and pile depth of 12-14mm.</p>

                        <p>The candy rug is priced at $<?php echo $price; ?>/m² and available in extra large sizes of up to 500cm x 1200cm (16ft x 40ft).</p>

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
                    <h1>Additional Colours</h1>  
                    <div class="row">

                        <div class="col-sm-12 padding">
                            <div class="pro_right">


                                <?php                                
                                foreach ($rugDiscounts as $rug) {
                                    foreach ($rug['Genrug'] as $genrug) {
                                        ?>
                                        <a href="<?php echo $this->Html->url('/rugs/editor/' . $rug['Rug']['id'] . "/" . $genrug['colorstamp']); ?>">
                                            <div class="col-md-2 col-sm-4 col-xs-6">
                                                <div class="product_main">
                                                    <img alt="" src="<?php echo $this->Html->url('../' . $genrug['path'] . "pre.png"); ?>">
                                                    <p><?php echo $rug['Rug']['description']; ?></p>
                                                    <div class="add_cart2">
                                                        <span><i class="fa fa-shopping-cart"></i><a href="#">Add to Cart</a></span>
                                                        <div class="rupee">
                                                            <?php
                                                            $aa = ($genrug['price'] * $rug['Rug']['discount']) / 100;
                                                            $bb = $genrug['price'] - $aa;
                                                            ?>
                                                            <p>$<?php echo $bb; ?>   <span>$<?php echo $genrug['price']; ?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                } 
                                ?>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="top_rug">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>You may also like</h1>
                            <div class="row">
                                <?php
                                foreach ($popularGenrugs as $popularGenrug) {
                                    if ($popularGenrug['Rug']['id'] == $r_id) {
                                        continue;
                                    }
                                    ?>
                                    <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Rug']['id']); ?>">
                                        <div class="col-sm-2 col-xs-6">
                                            <div class="pro">
                                                <img src="/<?php echo $popularGenrug['Genrug']['path'] . "pre.png"; ?>" alt="">
                                                <p><?php echo $popularGenrug['Rug']['description']; ?></p>
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
                                    </a>
<?php } ?>
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
    .custom_sizes_box span {
        float: none;
    }
    .col-xs-9.padding > a {
        float: left;
        margin: 0 6% 0 0;
        width: auto;
    }

    .addtocart {
        color: #505050;
        float: left;
        font-size: 11px;
        line-height: 28px;
    }

    .add_cart2 span{
        width:auto !important;
        margin: 0 9% 0 0;
    }
</style>    
<?php
$this->start("script");
$this->end();
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.addtocart').tooltip();
        $('.swatch-picker').hover(function() {
            $(this).find('.swatch-pick').show();
            $(this).css({'box-shadow': '0 0 4px rgba(55,55,55,0.6)'});
        }, function() {
            $(this).find('.swatch-pick').hide();
            $(this).css({'box-shadow': 'none'});
        });

        $('.trig-clr').on("click", function() {
            var clr = $(this).data().clr;
            console.log($(this).parent().parent().parent().parent().parent());
            $(this).parent().parent().parent().parent().parent().parent().find('input').val(clr);
            $(this).parents('form').submit();
        });
        $('#shape-pick img').on("click", function() {
            var shp = $(this).data().shp;
            console.log(shp);
            $(this).parent().parent().parent().parent().parent().find('input').val(shp);
            $(this).parents('form').submit();
        });

        $('#upd-clr-shp').ajaxForm({
            beforeSubmit: function(a) {
                $('body').waiting({fixed: true});
                return true;
            },
            success: function(d) {
                window.location = d.url;
                //$('body').waiting('done');
                return false;
            }
        });

        edt = new EditorVM();
        ko.applyBindings(edt);
        edt.mUnits('ft');
    });
    var EditorVM = function() {
        var me = this;
        me.price = ko.observable(<?php echo $price; ?>);
        me.sizes = ko.observableArray(<?php $exr = array();
foreach ($sizes as $s) {
    $exr[] = array('label' => $s['Size']['label'], 'size_in_ft' => $s['Size']['size_in_ft'], 'id' => $s['Size']['id']);
} echo json_encode($exr); ?>);
        me.size = ko.observable('4 x 6');
        me.qty = ko.observable(1);
        me.total = ko.computed(function() {
            var size = 0;
            var x = this.sizes();
            for(i in x){
                if(x[i].label == this.size())
                    size = x[i].size_in_ft;
            }
            return size * me.price() * this.qty() - (size * me.price() * this.qty()) * <?php echo $crug['discount']; ?> / 100;
        }, this);
        me.mUnits = ko.observable("cm");
        me.mUnits.subscribe(function(newVal) {
            console.log(newVal);
        }, this);
        me.notify = function(type, msg, focus) {
            alert(type + ": " + msg);
            if (focus != null)
                $(focus).css({'background': 'pink'});
            return false;
        }
        me.add2cart = function(d, e) {

            $("#odr-l, #odr-b, #odr-s").css({'background': 'none'});
            var send = true;
            var data = {
                rid: '<?php echo $r_id; ?>',
                qty: me.qty(),
                size: me.size(),
                shp: '<?php echo $defaultShp; ?>',
                clr: '<?php echo str_replace("#", "", $colorstamp); ?>'
            };
            if (send) {
                var t = me;
                $.post("http://rugbuilder.com/Cart/add", data, function(d) {
                    t.notify("Info", "Product added to cart...", "#dsf-td5df");
                    window.location = "/rugs/cart";
                });
                flyToElement($('#big-img'), $(e.currentTarget));
            }
        }
        me.removeItem = function(d, e) {

        }
    }


</script>    