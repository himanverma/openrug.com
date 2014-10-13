
    <div class="order">
        <h1>1. review your order</h1>
        <p>You have 1 items in your cart</br>
            Not ready to order? <a href="#">Continue Shopping</a> <a href="#" class="shipping">Empty Shopping Cart</a></p>
        
        <table cellpadding="5" class="order_cart">
            <tbody>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th> 	 	 	
                </tr>
                <!-- ko foreach:items -->
                <tr>
                    <td>
                        <div class="order_left">
                            <img width="100%" data-bind="attr:{'src': '/files/gen/'+genrug_id+'/'+colors+'/'+shape+'.png'} " />
                        </div>
                        <div class="order_right">
                            <strong>tea time rug</strong>

                        <p>product id: 1276034

                        size: <!-- ko text:length --><!-- /ko -->cm x <!-- ko text:bredth --><!-- /ko -->cm

                        material: 100% pure wool

                        wool pile depth: .59''-.70''
                        colours: </p>
                        
                        <p>colours: </p>
                        <p data-bind="swatch:{'clrstamp':colors}"><img src="#"></p>
                        
                        </div>
                        <p>Rug options...</p>
                        <p> 
                            <input type="checkbox"> Include Scotchgard™ Rug Protector info <i class="fa fa-info"></i>  add +£17.45</p>
                        
                    </td>
                    
                    <td>
                        <select data-bind="options:$root.qtArray, value:qty">
                        </select>
                    </td>
                    
                    <td>
                        <strong>£352.83</strong>
                    </td>
                    
                    <td>
                        <input type="checkbox">
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
                        <select style="width:222px;">
                            <option value="Algeria">Algeria</option>     
                            <option value="Argentina">Argentina</option>     
                            <option value="Australia">Australia</option>     
                            <option value="Austria">Austria</option>     
                            <option value="Bahamas">Bahamas</option>   
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
                        <p>£0.00</p>
                    </td>
                    <td><p>Free</p></td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Promotional Code *</strong> type code into the box and click update total.</p>
                        <p><input type="text">dsfsdfsdf</p>
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
                        <strong style="color:#CE3E23;">£352.83<strong
                    </td>
                    <td style="background-color:#f1f1f1"></td>
                </tr>
                
            </tbody>
        </table>
        <input type="button" value="Next step-Address >" class="next_step">
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
    var CartVM = function(){
        var me = this;
        me.items = ko.observableArray([]);
        me.qtArray = [1,2,3,4,5,6,7,8,9,10];
        me.removeItem = function(d,e){
            console.log(d);
            console.log(e);
        }
        me.update = function(d,e){
            console.log(d);
            console.log(e);
        }
        me.init = function(){
            me.getitems();
        }
        me.getitems = function(){
            var m = me;
            $.post("/cart/cart",function(d){
                console.log(d.Inlineitem);
                    m.items(d.Inlineitem);
            });
        }
        me.init();
    }
    var cart = new CartVM();
    $(document).ready(function(){
        ko.applyBindings(cart);
    });
    
    
    
</script>    