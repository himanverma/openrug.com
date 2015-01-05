<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>
<div class="popular_rug" id="ajax-pplr">

</div>
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




        $.ajax({
            url: urle,
            cache: false,
            success: function(html) {

                if (urle.match(/\/popularRugs*/i)) {
                    $('#ajax-pplr').html(html);
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

    getdata('/Ajax/popularRugs1/<?php echo $shape; ?>');
//getdata('/Ajax/recentRugs1/oval');
</script>    
<script id="clrbx-cart" type="text/html">
    <div class="addtocart-mdl">
        
        <div class="col-sm-12">
            
        </div>
        <h2>Add to cart</h2>
        
            <p>
                <label><b>Quantity:</b></label>
                <span><select id="odr-qty"  data-bind="value:qty ">
                        <?php for ($ic = 1; $ic <= 10; $ic++) { ?>
                            <option value="<?php echo $ic; ?>"><?php echo $ic; ?></option>
                        <?php } ?>
                    </select>
                </span>
            </p>
            <p>
                <label><b>Shape:</b></label>
                <span>
                    <select data-bind="value:shape" >
                        <option value="round">ROUND</option>
                        <option value="oval">OVAL</option>
                        <option value="rect">RECTANGULAR</option>
                        <option value="square">SQUARE</option>
                        <option value="runner">RUNNER</option>
                    </select>
            </span>
            </p>
            <div class="add_card_adia">
                <span>
                    <!-- ko if: shape() == "round" -->
                    <b>Diameter:</b>
                    <!-- /ko -->
                    <!-- ko if: shape() == "square" -->
                    <b>Side:</b>
                    <!-- /ko -->
                    <!-- ko if: (shape() != "round" && shape() != "square") -->
                    <b>Width:</b>
                    <!-- /ko -->
                </span>
                <article>
                    <input data-bind="value:widthFt " />ft <input data-bind="value:widthIn " />in
                </article>
            </div>
            <!-- ko if: (shape() != "round" && shape() != "square") -->
             <div class="add_card_adia">
                <span>
                    <b>Height:</b>
                </span>
                <article>
                    <input data-bind="value:heightFt " />ft <input data-bind="value:heightIn " />in
                 </article>
           </div>
            <!-- /ko -->
          <div class="add_card_adia">
               <span>
                    <p class="nn_pp">(<?php echo $_global_carving_label; ?>):</p></td>
                </span>
               <article>
                    <select data-bind="value:carving ">
                        <option value="<?php echo $_global_carving_price; ?>">Yes</option>
                        <option value="0">No</option>
                    </select>
                 </article>
           </div>
           <div class="add_view_radio">
                    <?php
                    $p_depth = json_decode($_global_pile_depth);
                    foreach ($p_depth as $p_d) {
                        ?>
                        <p class="input_pile"><input data-bind="checked:pileDepth " type="radio" name="pl_depth" value="<?php echo $p_d->val; ?>"> <?php echo $p_d->label; ?> </p>
                    <?php } ?>
              </div>


           <div class="add_view_button">
                  <span><button class="btn btn-default" data-bind="click:add2cart">Add to Cart</button></span>
                  <span><button class="btn btn-default" data-bind="click:add2cartNMove">Checkout</button></span>
           </div>
        
    </div>
</script>

<div class="facebook_user">
    <div class="row">
        <div class="col-sm-12">
            <iframe width="100%" height="270" frameborder="0" src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmodernrugs&width=910&height=258&colorscheme=light&show_faces=true&header=false&stream=false&show_border=false&appId=754920931213739" framescroll="no"></iframe>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.addtocart').on("click", function(e) {
            var clrObj = new EditorVM($(this).data('price'), $(this).data('rid'), $(this).data('cstamp'), $(this).data('discount'), '<?php echo $shape; ?>');
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
    });
    var EditorVM = function(p, r, c, d, sh) {
        var me = this;

        me.rid = ko.observable(0);
        me.discount = ko.observable(0);
        me.cstamp = ko.observable('');

        me.shape = ko.observable(0);
        me.price = ko.observable(0);
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
            total = total - total * me.discount() / 100
            return total.toFixed(2);
        }, this);
        me.mUnits = ko.observable("cm");
        me.mUnits.subscribe(function(newVal) {
            console.log(newVal);
        }, this);
        me.notify = function(type, msg, focus) {
            //alert(type + ": " + msg);
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
                rid: me.rid(),
                length: parseFloat(me.widthFt()) * 12 + parseFloat(me.widthIn()),
                breadth: parseFloat(me.heightFt()) * 12 + parseFloat(me.heightIn()),
                pileSize: pdepth,
                craving: me.carving() != "0" ? "Yes" : "No",
                area: me.area(),
                total: me.total(),
                qty: me.qty(),
                size: me.size(),
                shp: me.shape(),
                clr: me.cstamp()
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
                rid: me.rid(),
                length: parseFloat(me.widthFt()) * 12 + parseFloat(me.widthIn()),
                breadth: parseFloat(me.heightFt()) * 12 + parseFloat(me.heightIn()),
                pileSize: pdepth,
                craving: me.carving() != "0" ? "Yes" : "No",
                area: me.area(),
                total: me.total(),
                qty: me.qty(),
                size: me.size(),
                shp: me.shape(),
                clr: me.cstamp()
            };
            if (send) {
                var t = me;
                $.post("http://rugbuilder.com/Cart/add", data, function(d) {
                    t.notify("Info", "Product added to cart...", "#dsf-td5df");
                    window.location = "/rugs/cart";
                });
                flyToElement($('#big-img'), $(e.currentTarget));
            }
        };
        me.removeItem = function(d, e) {

        };

        me.init = function(price, rid, cstamp, discount, sh) {
            if (price != undefined && rid != undefined) {
                me.price(price / 12);
                me.rid(rid);
                me.cstamp(cstamp);
                me.discount(discount);
                me.shape(sh);
            } else {
            }
        };
        me.init(p, r, c, d, sh);
    }
</script>
<?php
echo $this->Html->css(array('app/addto-cart-mdl'));
?>

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