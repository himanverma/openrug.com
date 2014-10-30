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
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
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
            <?php /*
            <div class="col-sm-3">
                <div class="select_cm">
                    <form role="form">
                        <label class="radio-inline">
                            <input type="radio" value="cm" id="inlineRadio1" data-bind="checked: mUnits" name="inlineRadioOptions"> cm
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="ft" id="inlineRadio2" data-bind="checked: mUnits" name="inlineRadioOptions"> feet
                        </label>

                    </form>          
                </div>
            </div>
             * 
             */
            ?>
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
                                    <strong>your rug price: <small> $0.00</small></strong>

                                    <span class="addtocart" data-bind="click:add2cart" class="t-tip"  data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                        <a href="#"><img src="<?php echo $this->Html->url("/images/addtocart.png"); ?>" alt=""></a></span>

                                </p>               


                            </form>          
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <select name="approx_size[]" id="approx_size" class="multiselect" title="Size" multiple="multiple" size="4"><option value="12">2 x 3</option><option value="13">3 x 5</option><option value="14">4 x 6</option><option value="15">5 x 8</option><option value="23">8' Round</option><option value="29">8' Runner</option><option value="6">8' Square</option><option value="16">6 x 9</option><option value="22">6' Round</option><option value="28">6' Runner</option><option value="5">6' Square</option><option value="17">8 x 10</option><option value="19">10 x 14</option><option value="18">9 x 12</option><option value="20">12 x 15</option><option value="24">10' Round</option><option value="25">12' Round</option><option value="26">14' Round</option><option value="27">4' Runner</option><option value="30">10' Runner</option><option value="31">12' Runner</option><option value="3">14' Runner</option><option value="4">4' Square</option><option value="7">10' Square</option><option value="108">16' Runner</option><option value="21">4' Round</option><option value="198">5' Round</option><option value="8">12' Square</option><option value="9">14' Square</option><option value="97">Octagon</option><option value="100">Shapes</option><option value="11">Sample</option><option value="101">Oval</option><option value="105">12 x 18</option><option value="104">15 x 20</option><option value="207">Oversize</option></select>
                    </div>
                    <?php /*
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
                     * 
                     */
                    ?>
                </div>
                <?php /*
                <div class="poplular_custom_sizes">
                    <h1>Poplular custom sizes:</h1>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':140,'unit':mUnits}">140</span><!-- ko text: mUnits -->cm<!-- /ko --> x <span data-bind="cm2ft2cm:{'cm':200,'unit':mUnits}">200</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>$<span data-bind="text:ko.computed(function(){ return (price() * 140/100 * 200/100).toFixed(2); })"></span> </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':120,'unit':mUnits}">120</span><!-- ko text: mUnits -->cm<!-- /ko --> x <span data-bind="cm2ft2cm:{'cm':180,'unit':mUnits}">180</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>$<span data-bind="text:ko.computed(function(){return (price() * 120/100 * 180/100).toFixed(2); })"></span> </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':100,'unit':mUnits}">100</span><!-- ko text: mUnits -->cm<!-- /ko --> x <span data-bind="cm2ft2cm:{'cm':160,'unit':mUnits}">160</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>$<span data-bind="text:ko.computed(function(){return (price() * 100/100 * 160/100).toFixed(2); })"></span> </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom_sizes_box">
                            <span><span data-bind="cm2ft2cm:{'cm':150,'unit':mUnits}">150</span><!-- ko text: mUnits -->cm<!-- /ko --> x <span data-bind="cm2ft2cm:{'cm':220,'unit':mUnits}">220</span><!-- ko text: mUnits -->cm<!-- /ko --></span>
                            <p>$<span data-bind="text:ko.computed(function(){return (price() * 150/100 * 220/100).toFixed(2); })"></span> </p>
                        </div>
                    </div>
                </div>
                */
                ?>

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
                                    <?php }
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
<?php foreach ($popularGenrugs as $popularGenrug) {
    if ($popularGenrug['Rug']['id'] == $r_id) {
        continue;
    } ?>
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
        me.l = ko.observable('');
        me.b = ko.observable('');
        me.s = ko.observable('');
        me.qty = ko.observable(1);
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
            if (me.l() == 0 || me.l() == "") {
                send = me.notify("Warning", "Please enter lenth of rug.", "#odr-l");
            }
            if (me.b() == 0 || me.b() == "") {
                send = me.notify("Warning", "Please enter bredth of rug.", "#odr-b");
            }
            if (me.s() == 0 || me.s() == "") {
                send = me.notify("Warning", "Please select a pile size.", "#odr-s");
            }
            var l = me.l();
            var b = me.b();
            if (me.mUnits() == "ft") {
                l = (l / 0.032808).toFixed(2);
                b = (b / 0.032808).toFixed(2);
            }
            var data = {
                rid: '<?php echo $r_id; ?>',
                qty: me.qty(),
                l: l,
                b: b,
                s: me.s(),
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