<div class="row">
    <div class="single_pro">
        <form id="upd-clr-shp" method="post">
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
                        <?php for ($i = 0; $i < $colorCount; $i++) { ?>    
                            <span class="swatch-picker">
                                <img src="<?php echo $this->Html->url("/swatch/" . $defaultClr[$i]['png']); ?>" alt="">
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
                    <img class="well well-sm" id="big-img" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>"/>
                    <div class="col-sm-12 sm-p-trig">
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "1.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "2.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-2">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "3.png"); ?>" onerror="$(this).parent().remove();" alt="" width="100%">
                        </div>
                        <div class="im col-sm-4">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#rug-preview .sm-p-trig img').on("mouseenter", function() {
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
                            <input type="radio" value="cm" id="inlineRadio1" data-bind="checked: mUnits" name="inlineRadioOptions"> cm
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="ft" id="inlineRadio2" data-bind="checked: mUnits" name="inlineRadioOptions"> feet and inches 
                        </label>

                    </form>          
                </div>
            </div>
            <div class="col-sm-12">
                <div class="calculate_price_box">
                    <div class="col-sm-5">
                        <div class="select_cm_all1">
                            <form> 
                                <p>
                                    <label>Width</label>
                                    <input name="b" id="odr-b" data-bind="value:l" type="text">
                                    <label> <!-- ko text: mUnits -->cm<!-- /ko -->     x     Length </label>
                                    <input name="l" id="odr-l" data-bind="value:b" type="text">
                                    <span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                                </p>
                                <p>
                                    <label>Quantity</label>
                                    <select id="odr-qty" data-bind="value:qty " name="">
                                        <?php for ($ic = 1; $ic <= 10; $ic++) { ?>
                                            <option value="<?php echo $ic; ?>"><?php echo $ic; ?></option>
                                        <?php } ?>
                                    </select>
                                    <strong>your rug price: <small> £0.00</small></strong>

                                    <span class="addtocart" data-bind="click:add2cart"><a href="#"><img src="<?php echo $this->Html->url("/images/addtocart.png"); ?>" alt=""></a></span>

                                </p>               


                            </form>          
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="select_cm_all" id="odr-s">
                            <form role="form">
                                <span>Pile depth </span>
                                <label class="radio-inline">
                                    <input type="radio" value="option1" data-bind="checked: s" id="inlineRadio1" name="inlineRadioOptions"> 
                                    <span data-bind="cm2ft2cm:{'cm':12,'unit':mUnits}">12</span>-
                                    <span data-bind="cm2ft2cm:{'cm':14,'unit':mUnits}">14</span>
                                    <!-- ko text: mUnits -->cm<!-- /ko -->
                                </label>
                                <span><img src="<?php echo $this->Html->url("/images/icon1.png"); ?>" alt=""></span>
                                <label class="radio-inline">
                                    <input type="radio" value="option2" data-bind="checked: s" id="inlineRadio2" name="inlineRadioOptions">
                                    <span data-bind="cm2ft2cm:{'cm':15,'unit':mUnits}">15</span>-
                                    <span data-bind="cm2ft2cm:{'cm':18,'unit':mUnits}">18</span>
                                    <!-- ko text: mUnits -->cm<!-- /ko --> 
                                </label>
                                <span><img src="<?php echo $this->Html->url("/images/icon1.png"); ?>" alt=""></span>
                                <label class="radio-inline">
                                    <input type="radio" value="option3" data-bind="checked: s" id="inlineRadio3" name="inlineRadioOptions">
                                    <span data-bind="cm2ft2cm:{'cm':19,'unit':mUnits}">19</span>-
                                    <span data-bind="cm2ft2cm:{'cm':21,'unit':mUnits}">21</span>
                                    <!-- ko text: mUnits -->cm<!-- /ko -->
                                </label>

                            </form>          
                        </div>
                    </div>
                </div>
                <div class="poplular_custom_sizes">
                    <h1>Poplular custom sizes:</h1>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':140,'unit':mUnits}">140</span>cm x <span data-bind="cm2ft2cm:{'cm':200,'unit':mUnits}">200</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>£568.00 </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':120,'unit':mUnits}">120</span>cm x <span data-bind="cm2ft2cm:{'cm':180,'unit':mUnits}">180</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>£498.99 </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':100,'unit':mUnits}">100</span>cm x <span data-bind="cm2ft2cm:{'cm':160,'unit':mUnits}">160</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>£508.50 </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':150,'unit':mUnits}">150</span>cm x <span data-bind="cm2ft2cm:{'cm':220,'unit':mUnits}">220</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>£798.63 </p>
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


                                <?php foreach ($rugDiscounts as $rug) {
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
    <?php }
} ?>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="top_rug">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Top rug designs</h1>
                            <div class="row">
<?php foreach ($popularGenrugs as $popularGenrug) { ?>
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
    });
    var EditorVM = function() {
        var me = this;
        me.l = ko.observable('');
        me.b = ko.observable('');
        me.s = ko.observable('');
        me.qty = ko.observable(1);
        me.mUnits = ko.observable("cm");
        me.mUnits.subscribe(function(newVal) {
            console.log(newVal);
        }, this);
        me.notify = function(type, msg, focus = null){
            alert(type + ": " + msg);
            if (focus != null)
                $(focus).css({'background': 'pink'});
            return false;
        }
        me.add2cart = function(d,e) {
            
            $("#odr-l, #odr-b, #odr-s").css({'background': 'none'});
            var send = true;
            if (me.l() == 0 || me.l() == "") {
                send = me.notify("Warning", "Please enter lenth of rug.", "#odr-l");
            }
            if (me.b() == 0 || me.b() == "") {
                send = me.notify("Warning", "Please enter bredth of rug.", "#odr-b");
            }
            if (me.s() == 0 || me.s() == "") {
                send = me.notify("Warning", "Please select a pile size.", "#odr-s");
            }

            var data = {
                rid: '<?php echo $r_id; ?>',
                qty: me.qty(),
                l: me.l(),
                b: me.b(),
                s: me.s(),
                shp: '<?php echo $defaultShp; ?>',
                clr: '<?php echo str_replace("#", "", $colorstamp); ?>'
            };
            if (send) {
                var t = me;
                $.post("http://rugbuilder.com/Cart/add", data, function(d) {
                    t.notify("Info","Product added to cart...");
                    window.location = "/rugs/cart";
                });
                flyToElement($('#big-img'), $(e.currentTarget));
            }
        }
        me.removeItem = function(d,e){
            
        }
    }


</script>    