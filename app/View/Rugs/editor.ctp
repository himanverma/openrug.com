<div class="row">
    <div class="single_pro">
        <form method="post">
            <div class="color_editor">
                <div class="col-sm-3">
                    <div class="single_pro_menu">
                        <a href="#">home</a>  >  <a href="#">rugs</a>  >  <a href="#">natural</a>  >  <a href="#">tea time rug </a>
                        <p>tea time rug   <br /><span>product no: <?php echo $crug['id'] . "ITM" . $crug2['id']; ?> </span></p>
                        <!--<div class="btn_click"><a href="#"><img src="<?php echo $this->Html->url('/images/click_here_btn.png'); ?>" alt=""></a></div>-->
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>

            </div> 
        </form>

        <div class="single_page_pro">
            <div class="col-lg-12">
                <div class="col-lg-8">
                    <div id="rug-preview">
                        <img align="center" class="well well-sm" style="height: 550px;" id="big-img" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>"/>
                    </div>
                    <div class="col-sm-12 sm-p-trig">
                        <div class="im col-xs-3">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . ".png"); ?>" onerror="$(this).parent().remove();" alt=""  height="60px;" width="auto">
                        </div>
                        <div class="im col-xs-3">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "1.png"); ?>" onerror="$(this).parent().remove();" alt="" height="60px;" width="auto">
                        </div>
                        <div class="im col-xs-3">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "2.png"); ?>" onerror="$(this).parent().remove();" alt="" height="60px;" width="auto">
                        </div>
                        <div class="im col-xs-3">
                            <img class="well well-sm" src="<?php echo $this->Html->url($ims . $defaultShp . "3.png"); ?>" onerror="$(this).parent().remove();" alt="" height="60px;" width="auto">
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Customize</div>
                        <div class="panel-body" style="padding: 8px !important">
                            <form id="upd-clr-shp" method="post">
                                <div class="edit_color">
                                    Change Colours(<?php echo $colorCount; ?>)
                                    <div>
                                    <?php for ($i = 0; $i < $colorCount; $i++) { ?>    
                                        <span class="swatch-picker">
                                            <img style="height: 52px; margin: 3px; width: auto;" src="tst" onerror="this.src = '/tom/<?php echo $defaultClr[$i]['swt']; ?>.png'" alt="">
                                            <div class="swatch-pick">
                                                <?php echo $this->element("swatch"); ?>
                                            </div>
                                            <input type="hidden" name="clr_sb[]" value="<?php echo $defaultClr[$i]['clr']; ?>" />
                                        </span>
                                    <?php } ?>
                                    </div>
                                       <!-- <a href="#"><i class="fa fa-plus-square"></i></a> -->
                                </div>
                                <div class="edit_shape">
                                    <p class="head_edit">Edit Shape:</p> 
                                    <!--<span class="swatch-picker">
                                        <img style="height:16px" src="<?php echo $this->Html->url("/images/sh-" . $defaultShp . ".png?_=" . time()); ?>" alt="">
                                        <div class="swatch-pick">
                                            <input type="hidden" name="shp_sb" value="<?php echo $defaultShp; ?>" />
                                            <table id="shape-pick" cellpadding="5">
                                                <tr>
                                                    <td align="center">
                                                        <img data-shp="oval" src="<?php echo $this->Html->url("/images/sh-oval.png?_=" . time()); ?>" alt=""><br>
                                                        <strong>Oval</strong>
                                                    </td>
                                                    <td align="center">
                                                        <img data-shp="square" src="<?php echo $this->Html->url("/images/sh-square.png?_=" . time()); ?>" alt=""><br>
                                                        <strong>Square</strong>
                                                    </td>
                                                    <td align="center">
                                                        <img data-shp="round" src="<?php echo $this->Html->url("/images/sh-round.png?_=" . time()); ?>" alt=""><br>
                                                        <strong>Round</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <img data-shp="rect" src="<?php echo $this->Html->url("/images/sh-rect.png?_=" . time()); ?>" alt=""><br>
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
                            </form>-->
                                    <span class="shp-obj-shape active1"></span>
                                    <span class="shp-obj-runner"></span>
                                    <div class="shape_st">
                                    <span class="shp-obj-square"></span>
                                    <span class="shp-obj-circle"></span>
                                    <span class="shp-obj-ovel"></span></div>
                                    

                            <h5 class="pull-right" style="text-transform: uppercase; margin-top: 20px;">SKU: <?php
                                $sku_pre = md5($crug['name']);
                                $sku_pre = str_split($sku_pre, 3);
                                //echo $sku_pre[0] . ((int) ($crug['id']) + 487);
                                echo $crug['id'] . "ITM" . $crug2['id'];
                                //print_r($crug2);
                                ?></h5>
                            <h2 class="sph1"><?php echo $crug['name']; ?></h2>
                            <hr>

                            <div class="confrigation">
                                <div class="row">
                                    <div class="col-xs-6"><b>Pattern : </b></div>
                                    <div class="col-xs-6"><?php echo $crug['pattern']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6"><b>Price/sq.ft. : </b></div>
                                    <div class="col-xs-6">USD <?php echo round($crug['price'], 2); ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6"><b>Shape : </b></div>
                                    <div class="col-xs-6"><?php echo $defaultShp == "rect" ? "RECTANGULAR" : strtoupper($defaultShp); ?></div>
                                </div>

                                <?php if ($crug['discount'] != 0) { ?>
                                    <div class="row" style="color: green;">
                                        <div class="col-xs-6"><b>Discount : </b></div>
                                        <div class="col-xs-6"><?php echo $crug['discount']; ?>%</div>
                                    </div>
                                <?php } ?>
                            </div>
                            <table>
                                <tr class="input_tr">
                                    <td>
                                        <p class="input_p">Quantity:</p>
                                    </td>
                                    <td>
                                        <select id="odr-qty" class="form-control sm" data-bind="value:qty ">
                                            <?php for ($ic = 1; $ic <= 10; $ic++) { ?>
                                                <option value="<?php echo $ic; ?>"><?php echo $ic; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="input_tr">
                                    <td>
                                        <p class="input_p">
                                            <?php
                                            if ($defaultShp == "round") {
                                                echo "Diameter";
                                            } elseif ($defaultShp == "square") {
                                                echo "Side";
                                            } else {
                                                echo "Width";
                                            }
                                            ?>
                                            :
                                        </p>
                                    </td>
                                    <td><input class="input_ft form-control" data-bind="value:widthFt " min="1"  type="number" /></td>
                                    <td> ft. </td>
                                    <td><input class="input_ft  form-control" data-bind="value:widthIn " min="0" type="number" /></td>
                                    <td>in.</td>
                                </tr>
                                <?php if ($defaultShp != "round" && $defaultShp != "square") { ?>
                                    <tr class="input_tr">
                                        <td>
                                            <p class="input_p">Height:</p>
                                        </td>
                                        <td><input class="input_ft form-control" data-bind="value:heightFt " min="1" type="number" /></td>
                                        <td> ft. </td>
                                        <td><input class="input_ft  form-control" data-bind="value:heightIn " min="0" type="number" /></td>
                                        <td> in. </td>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr class="input_psf">
                                    <td>
                                        <p class="input_p">Carving:</p>
                                    </td>
                                </tr>
                                <tr class="cuver_1">
                                    <td colspan="4">
                                        <div class="new_one"><p class="nn_pp">(<?php echo $_global_carving_label; ?>):</p>
                                            <select class="input_select" data-bind="value:carving ">
                                            <option value="<?php echo $_global_carving_price; ?>">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr class="input_psf">
                                    <td colspan="4">
                                        <p class="input_p">Pile Depth:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="new_one">
                                        <?php
                                        $p_depth = json_decode($_global_pile_depth);
                                        foreach ($p_depth as $p_d) {
                                            ?>
                                            <p class="input_pile"><input data-bind="checked:pileDepth " type="radio" name="pl_depth" value="<?php echo $p_d->val; ?>"> <?php echo $p_d->label; ?> </p>
                                        <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><p><span style="margin-bottom: 20px;">Total Cost:</span></p></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span style="font-size:40px; margin-left:0px; color:#ff826e;">$ <span data-bind="text:total"></span></span><button data-bind="click:add2cart" class="addtocart1">Add to Cart</button>
                                <button data-bind="click:add2cartNMove" class="addtocart1">Checkout</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                
                
                <div class="descrip">
                    <div role="tabpanel" class="bs-example bs-example-tabs">
    <ul role="tablist" class="nav nav-tabs" id="myTab">
      <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home">Description</a></li>
      <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile">Reviews(0)</a></li>
      <li role="presentation"><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile">Customtab block</a></li>
    </ul>   
    <div class="tab-content" id="myTabContent">
      <div aria-labelledby="home-tab" id="home" class="tab-pane fade in active" role="tabpanel">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div aria-labelledby="profile-tab" id="profile" class="tab-pane fade" role="tabpanel">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div aria-labelledby="dropdown1-tab" id="dropdown1" class="tab-pane fade" role="tabpanel">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div aria-labelledby="dropdown2-tab" id="dropdown2" class="tab-pane fade" role="tabpanel">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
        <div aria-labelledby="dropdown3-tab" id="dropdown2" class="tab-pane fade" role="tabpanel">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>
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
        <div class="col-lg-12">
            <div>
                <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                <script type="text/javascript">stLight.options({publisher: "9fd7ddb9-da0d-4b7d-83fd-987ccdd7c64d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                <span class='st_facebook' displayText='Facebook'></span>
                <span class='st_twitter' displayText='Tweet'></span>
                <span class='st_pinterest' displayText='Pinterest'></span>
                <span class='st_googleplus' displayText='Google +'></span>
            </div>
        </div>
        <div class="calculate_price">
            <div class="col-sm-12">
                <div class="candy_rug">
                    <div class="col-sm-7 padding">
                        <h1><?php echo $crug['name']; ?> </h1>
                        <?php echo $crug['description']; ?>
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
                <div class="popular_rug" id="ajax-pplr">
                </div>
                <div class="top_rug" id="ajax-rcnt">

                </div>

            </div>
        </div>
    </div>

</div>
<?php
echo $this->Html->css(array('app/editor?_='.time()));
?>
<?php
$this->start("script");
$this->end();
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.addtocart').tooltip();
        $('.swatch-picker').hover(function() {
            var str = $(this).find('.swatch-pick').parent().find('input').val().toString();
            str = str.replace("#", "");
            $(this).find('.swatch-pick .swt-current').attr({"src": "/tom/" + str + ".png"});

            $(this).find('.swatch-pick').show();
            $(this).css({'box-shadow': '0 0 4px rgba(55,55,55,0.6)'});
        }, function() {
            $(this).find('.swatch-pick').hide();
            $(this).css({'box-shadow': 'none'});
        });
        $('.trig-clr').off("mouseover").on("mouseover", function() {
            var clr = $(this).data().clr;
            clr = clr.replace("#", "");
            $(this).parent().parent().parent().parent().parent().parent().find('.swt-over').attr({"src": "/tom/" + clr + ".png"});
        });
        $('.trig-clr').off("click").on("click", function() {
            var clr = $(this).data().clr;
            $(this).parents('.swatch-pick').parent().find('input').val(clr);
            $(this).parents('form').submit();
            return false;
        });
        $('#shape-pick img').off("click").on("click", function() {
            var shp = $(this).data().shp;
            $(this).parent().parent().parent().parent().parent().find('input').val(shp);
            $(this).closest('form').submit();
            return false;
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
        me.shape = ko.observable("<?php echo $defaultShp; ?>");
        me.price = ko.observable(<?php echo $price / 12; ?>);
        me.sizes = ko.observableArray(<?php
$exr = array();
foreach ($sizes_cart as $s) {
    $exr[] = array('label' => $s['Size']['label'], 'size_in_ft' => $s['Size']['size_in_ft'], 'id' => $s['Size']['id']);
} echo json_encode($exr);
?>);

        me.size = ko.observable('4 x 6');

        me.widthFt = ko.observable(2);
        me.widthIn = ko.observable(0);
        me.heightFt = ko.observable(2);
        me.heightIn = ko.observable(0);
        me.carving = ko.observable(0);
        me.pileDepth = ko.observable("+0.00");
        me.pDepthCost = <?php echo $_global_pile_depth; ?>;
        me.area = ko.computed(function() {
            var w = parseFloat(this.widthFt()) * 12 + parseFloat(this.widthIn());
            var h = parseFloat(this.heightFt()) * 12 + parseFloat(this.heightIn());
            if (this.shape() == "rect" || this.shape() == "runner") {
                return (w * h) / 12;
            }
            if (this.shape() == "square") {
                me.heightFt(0);
                return (w * w) / 12;
            }
            if (this.shape() == "round") {
                me.heightFt(0);
                var r = w / 2;
                return (Math.PI * Math.pow(r, 2)) / 12;
            }
            return (Math.PI * w / 2 * h / 2) / 12;
        }, this);


        me.qty = ko.observable(1);


        me.total = ko.computed(function() {
            var total = me.area() * me.price() * this.qty();
            total = eval(total + me.pileDepth());
            total = total + parseFloat(me.carving());
            total = total - total * <?php echo $crug['discount']; ?> / 100
            return total.toFixed(2);
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
            var pdepth = 0;
            for (i in me.pDepthCost) {
                if (me.pDepthCost[i].val == me.pileDepth()) {
                    pdepth = me.pDepthCost[i].label;
                }
            }
            var data = {
                rid: '<?php echo $r_id; ?>',
                length: parseFloat(me.widthFt()) * 12 + parseFloat(me.widthIn()),
                breadth: parseFloat(me.heightFt()) * 12 + parseFloat(me.heightIn()),
                pileSize: pdepth,
                craving: me.carving() != "0" ? "Yes" : "No",
                area: me.area(),
                total: me.total(),
                qty: me.qty(),
                size: me.size(),
                shp: '<?php echo $defaultShp; ?>',
                clr: '<?php echo str_replace("#", "", $colorstamp); ?>'
            };
            if (send) {
                var t = me;
                $.post("http://rugbuilder.com/Cart/add", data, function(d) {
                    t.notify("Info", "Product added to cart...", "#dsf-td5df");
                });
                flyToElement($('#big-img'), $(e.currentTarget));
            }
        }
        me.add2cartNMove = function(d, e) {
            $("#odr-l, #odr-b, #odr-s").css({'background': 'none'});
            var pdepth = 0;
            for (i in me.pDepthCost) {
                if (me.pDepthCost[i].val == me.pileDepth()) {
                    pdepth = me.pDepthCost[i].label;
                }
            }
            var send = true;
            var data = {
                rid: '<?php echo $r_id; ?>',
                length: parseFloat(me.widthFt()) * 12 + parseFloat(me.widthIn()),
                breadth: parseFloat(me.heightFt()) * 12 + parseFloat(me.heightIn()),
                pileSize: pdepth,
                craving: me.carving() != "0" ? "Yes" : "No",
                area: me.area(),
                total: me.total(),
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.pagination a').click(paginate);
    });

    var paginate = function(event) {
        event.preventDefault();
        var href;
        href = $(this).attr('href');
        getdata($(this).attr('href'));
    }
    function getdata(urle) {
        if (urle.match(/\/popularRugs*/i)) {
            $('#ajax-pplr').html("<br><br><br><center>loading...</center><br><br><br>");
        }
        if (urle.match(/\/recentRugs*/i)) {
            $('#ajax-rcnt').html("<br><br><br><center>loading...</center><br><br><br>");
        }



        $.ajax({
            url: urle,
            cache: false,
            success: function(html) {

                if (urle.match(/\/popularRugs*/i)) {
                    $('#ajax-pplr').html(html);
                }
                if (urle.match(/\/recentRugs*/i)) {
                    $('#ajax-rcnt').html(html);
                }
                $('.pagination a').click(paginate);
                $('.addtocart').on("click", function(e) {
                    var clrObj = new EditorVM($(this).data('price'), $(this).data('rid'), $(this).data('cstamp'), $(this).data('discount'));
                    var html = $('#clrbx-cart').html();
                    $.colorbox({html: html});
                    try {
                        ko.cleanNode($('#cboxContent')[0]);
                    } catch (e) {
                        console.log(e);
                    }
                    ko.applyBindings(clrObj, $('#cboxContent')[0]);
                    return false;
                });
            }
        });
    }

    getdata('/Ajax/popularRugs');
    getdata('/Ajax/recentRugs');
</script>
<script id="clrbx-cart" type="text/html">
    <div>
        <h2>Add to cart</h2><hr />
        <table>
            <tr>
                <td><b>Shape:</b></td>
                <td>
                    <select data-bind="value:shp" class="form-control sm">
                        <option value="round">ROUND</option>
                        <option value="oval">OVAL</option>
                        <option value="rect">RECTANGULAR</option>
                        <option value="square">SQUARE</option>
                        <option value="runner">RUNNER</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Size:</b></td>
                <td><select data-bind="options: sizes, optionsText: 'label', optionsValue: 'label' , value:size" class="form-control sm"  ></select></td>
            </tr>
            <tr>
                <td><b>Quantity:</b></td>
                <td><select id="odr-qty" class="form-control sm" data-bind="value:qty ">
                        <?php for ($ic = 1; $ic <= 10; $ic++) { ?>
                            <option value="<?php echo $ic; ?>"><?php echo $ic; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-default" data-bind="click:add2cart">Add to Cart</button></td>
            </tr>
        </table>
    </div>
</script>