<?php echo $this->Html->script(array("knockout.mapping.min")); ?>
<div class="order">
    <h1>1. review your order</h1>
    <p>You have <!-- ko text: items().length --><!-- /ko --> items in your cart</br>
        Not ready to order? <a href="/">Continue Shopping</a></p>
    <div class="table-responsive">
        <table cellpadding="5" class="order_cart table">
            <tbody>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th> 	 	 	
                </tr>
                <!-- ko foreach:items() -->
                <tr>
                    <td>
                        <div class="order_left">
                            <img width="100%" data-bind="attr:{'src': '/files/gen/'+Genrug.rug_id()+'/'+colors()+'/'+shape()+'.png'} " />
                        </div>
                        <div class="order_right">
                            <strong></strong>

                            <p>
                                Product id: <!-- ko text:Genrug.rug_id()+'ITM'+Genrug.id() --><!-- /ko --><br />
                                
                                <!-- ko if: (shape() == 'rect' || shape() == 'runner') -->
                                Size: <!-- ko text:parseFloat(length()/12).toFixed(2) --><!-- /ko -->' x <!-- ko text:parseFloat(bredth()/12) --><!-- /ko -->'<br />
                                <!-- /ko -->
                                <!-- ko if:(shape() != 'rect' || shape() != 'runner') -->
                                Size: <!-- ko text:parseFloat(length()/12).toFixed(2) --><!-- /ko -->'<br />
                                <!-- /ko -->
                                
                                Pile Depth: <!-- ko text:pile_size() --><!-- /ko --><br />
                                Craving: <!-- ko text:craving() --><!-- /ko --><br />
                            </p>

                            <p>colours: </p>
                            <p data-bind="swatch:{'clrstamp':colors()}"></p>

                        </div>
                        <p>Rug options...</p>
                        <p> 
                            <input type="checkbox"> Include Scotchgard™ Rug Protector info <i class="fa fa-info"></i>  add +$17.45</p>

                    </td>

                    <td>
                        <select data-bind="options:$root.qtArray, value:qty, event:{'change':$root.update} ">
                        </select>
                    </td>

                    <td>
                        <strong><span data-bind="text:ko.computed(function(){ return '$' + cart.totalPerItem(Genrug.price(),qty(),area(),pile_size(),craving(),Genrug.Rug.discount())})"></span></strong>
                    </td>

                    <td>
                        <button class="btn btn-danger" data-bind="click:$root.removeItem"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </td>

                </tr>
                <!-- /ko -->
                <tr>
                    <td>
                    </td>
                    <td>
                        <strong>Delivery&nbsp;country</strong>
                    </td>
                    <td colspan="2">
                        <select style="width:222px;" data-bind="options: countries, optionsValue: 'code', optionsText: 'name'">
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <strong><i class="fa fa-truck"></i>Delivery</strong>
                    </td>
                    <td>
                        <p>$<!-- ko text:deliveryCharge --><!-- /ko --></p>
                    </td>
                    <td><p>Free</p></td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Promotional Code *</strong> type code into the box and click update total.</p>
                        <p><input placeholder="Eg. GET30" type="text" id="promo-cd" /> <button data-bind="click: $root.applyPromo">Update Total</button></p>
                    </td>
                    <td>
                    </td>
                    <td>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="background-color:#f1f1f1">
                        <strong style="color:#CE3E23;">TOTAL</strong> 
                    </td>
                    <td style="background-color:#f1f1f1">
                        <strong style="color:#CE3E23;">$<!-- ko text:total --><!-- /ko --><strong
                                </td>
                                <td style="background-color:#f1f1f1"></td>
                                </tr>

                                </tbody>
                                </table>
                                </div>
                                <input type="button" class="addtocart1" value="Next step-Address >" data-bind="click: checkOut" class="next_step" /> 
                                </div>





                                <style type="text/css">
                                    .order_cart{
                                        float: left;
                                        width: 100%;
                                        border: 1px solid #ccc;
                                    }
                                    .order_cart th {
                                        border: 1px solid #ccc;
                                        padding:2px 5px;
                                    }
                                    .order_cart tr {
                                        border-bottom:1px solid #ccc;
                                    }
                                    .order_cart td {
                                        border-right: 1px solid #ccc;
                                        padding: 8px;
                                        vertical-align: top;
                                    }
                                    .order_cart p {
                                        float: left;
                                        width: 100%;
                                    }
                                    .fa.fa-info {
                                        border: 1px solid #ccc;
                                        border-radius: 11px;
                                        padding: 3px 8px;
                                    }
                                    .fa.fa-truck {
                                        color: #ccc;
                                        float: left;
                                        font-size: 22px;
                                        margin-right: 5px;
                                        text-align: right;
                                    }
                                    .order_cart input {
                                        display: inherit;
                                        float: left;
                                        margin-right: 9px;
                                    }
                                    .order_left {
                                        float: left;
                                        width: 150px;
                                    }
                                    .order_right {
                                        float: left;
                                        width: 175px;
                                    }
                                    .order_right strong{
                                        font-family: arial;
                                        font-size: 14px;
                                        font-weight: bold;
                                        color: #000;
                                    }
                                    .order_right p{
                                        font-family: arial;
                                        font-size: 14px;
                                        font-weight: normal;
                                        color: #000;
                                    }
                                    .order_right p img {
                                        margin-right: 5px;
                                    }
                                    .order{
                                        float: left;
                                        width: 100%;
                                    }
                                    .order h1{
                                        font-family: arial;
                                        font-size: 24px;
                                        font-weight: normal;
                                        color: #CE3E23;
                                    }
                                    .next_step {
                                        float: right;
                                        margin: 5px 0;
                                        padding: 1px 8px;
                                    }
                                    .shipping{
                                        font-family: arial;
                                        font-size: 14px;
                                        font-weight: normal;
                                        color: #CE3E23;
                                        float: right;
                                    }
                                </style>
                                <script type="text/javascript">
                                    var CartVM = function() {
                                        var me = this;
                                        me.countries = ko.observableArray([]);
                                        me.orderId = ko.observable(0);
                                        me.items = ko.observableArray([]);
                                        me.pDepthCost = <?php echo $_global_pile_depth; ?>;
                                        me.sizes = ko.observableArray(<?php
$exr = array();
foreach ($sizes as $s) {
    $exr[] = array('label' => $s['Size']['label'], 'size_in_ft' => $s['Size']['size_in_ft'], 'id' => $s['Size']['id']);
} echo json_encode($exr);
?>);
                                        me.qtArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                        me.deliveryCharge = ko.observable(0.00);
                                        me.totalPerItem = function(price, qty, area, pileDepth, craving , discount) {
                                            var total = (price/12) * qty * area;
                                            var pdepth = "+0";
                                            for(i in me.pDepthCost){
                                                if(me.pDepthCost[i].label == pileDepth){
                                                    pdepth = me.pDepthCost[i].val;
                                                }
                                            }
                                            total = eval(total+pdepth);
                                            if(craving == "Yes")
                                                total = total + parseFloat(<?php echo $_global_carving_price; ?>);
                                            total = total - total * discount / 100;
                                            return total.toFixed(2);
                                        };
                                        me.total = ko.computed(function() {
                                            var sum = 0.00;
                                            var items = ko.mapping.toJS(this.items);
                                            for (i in items) {
                                                sum += me.totalPerItem(items[i].Genrug.price, items[i].qty, items[i].area, items[i].pile_size, items[i].craving, items[i].Genrug.Rug.discount);
                                            }
                                            try {
                                                gross_key.abort()
                                            } catch (e) {
                                            }
                                            gross_key = $.post("/cart/updategross", {gross_total: sum, id: me.orderId}, function(d) {
                                            });
                                            return sum;
                                        }, this);
                                        me.orderId.subscribe(function(newVal) {
                                            var m = this;
                                            try {
                                                gross_key.abort()
                                            } catch (e) {
                                            }
                                            gross_key = $.post("/cart/updategross", {gross_total: m.total(), id: newVal}, function(d) {
                                            });
                                        }, this);
                                        me.removeItem = function(d, e) {
                                            $('body').waiting({fixed: true});
                                            var id = d.id();
                                            var item2Remove = d;
                                            $.post("/cart/removeitem", {id: id}, function(d) {
                                                $('body').waiting('done');
                                                me.items.remove(item2Remove);
                                            });
                                        }
                                        me.update = function(d, e) {
                                            $('body').waiting({fixed: true});
                                            var id = d.id();
                                            var qty = d.qty();
                                            $.post("/cart/updateitem", {id: id, qty: qty}, function(d) {
                                                console.log(d);
                                                $('body').waiting('done');
                                            });
                                        }
                                        me.applyPromo = function(d, e) {
                                            if ($('#promo-cd').val() == "") {
                                                alert("Enter Promo Code...");
                                                $('#promo-cd').focus();
                                            } else {
                                                $('#promo-cd').css({color: 'red'});
                                                alert("Invalid Promo Code...");
                                            }
                                        }
                                        me.init = function() {
                                            me.getitems();
                                            //alert('data');
                                            $.get("/js/countries.js", function(data) {
                                                data = eval(data);
                                                me.countries(data);
                                            });
                                        }
                                        me.getitems = function() {
                                            var m = me;
                                            $.post("/cart/cart", function(d) {
                                                if (d.Inlineitem.length > 0) {
                                                    m.items(ko.mapping.fromJS(d.Inlineitem)());
                                                }
                                                m.orderId(d.Order.id);
                                            });
                                        }
                                        me.checkOut = function(d, e) {
                                            window.location = "/rugs/billing";
                                            /*$.post("/cart/paypaldirect",{orderId:me.orderId()},function(d){
                                             console.log(d);
                                             });*/
                                        }

                                        me.init();
                                    }
                                    var cart = new CartVM();
                                    $(document).ready(function() {
                                        ko.applyBindings(cart);
                                    });



                                </script>    