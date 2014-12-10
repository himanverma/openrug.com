<div class="checkout">
    <h1>Checkout</h1>
    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
        <div class="panel panel-default">
            <div id="headingOne" role="tab" class="panel-heading">
                <span>Step 1: Checkout Option</span>
                <h4 class="panel-title">
                    <a aria-controls="collapseOne" aria-expanded="false" href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Modyfy <i class="fa fa-angle-double-right"></i>
                    </a>
                </h4>
            </div>
            <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="col-lg-6">
                        <h3>New Customer</h3>
                        <div class="form-group">
                            <div class="col-sm-4"><input type="radio" class="form-control small" id="firstName" name="newcst" placeholder="First Name"></div>
                            <div class="col-sm-8"><label for="exampleInputEmail1">Register Account</label></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"><input type="radio" class="form-control small" id="firstName" name="newcst" placeholder="First Name"></div>
                            <div class="col-sm-8"><label for="exampleInputEmail1">Guest Account</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div id="headingTwo" role="tab" class="panel-heading">
                <span>Step 2: Address Details</span>
                <h4 class="panel-title">
                    <a aria-controls="collapseTwo" aria-expanded="true" href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="">
                        Modyfy <i class="fa fa-angle-double-right"></i>
                    </a>
                </h4>
            </div>
            <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse in" id="collapseTwo" aria-expanded="true" style="height: 0px;">
                <div class="panel-body">
                    <div data-bind="foreach: savedAddress " title="Click to Fill">
                        <div title="Click to Fill" class="clickable-ad" style="cursor: pointer;" data-bind="click: $parent.selectAdd ">
                            <b>Saved Address <!-- ko text: $index() + 1 --><!-- /ko --></b>
                            <br />
                            <h6 data-bind="text: Billingadd.firstName + ' ' + Billingadd.lastName"></h6>
                            <div>
                                <span data-bind="text: Billingadd.address"></span>, <span data-bind="text: Billingadd.city"></span>(<span data-bind="text: Billingadd.postalCode"></span>), <span data-bind="text: Billingadd.country"></span><br>
                                <span data-bind="text: Billingadd.contactPrimary"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <form id="billCRX" role="form">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-sm-12"><h4>Billing Address</h4></div>

                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputEmail1">First Name<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:firstName" class="form-control small" id="firstName" name="firstName" placeholder="First Name"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputPassword1">Last Name<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:lastName " class="form-control" name="lastName" id="lastName" placeholder="Last Name"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Company</label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:company " name="company" id="company" class="form-control" placeholder="Company"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Address<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:address " name="address" id="address" class="form-control" placeholder="Address line here"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">City<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value: city" name="city" id="city" class="form-control" placeholder="city"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Country<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:country " name="country" id="country" class="form-control" placeholder="Country"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Postal Code<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:postalCode " name="postalCode" id="postalCode" class="form-control" placeholder="Postal Code"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-sm-12"><div class="col-sm-6 padding"><h4>Delivery Address</h4></div>
                                        <div class="col-sm-6 padding">
                                            <span style="font-size: 10px; color: #ccc; display: block" class="pull-right">Same as billing address <input type="checkbox" style="display: block; -webkit-appearance: checkbox !important;" data-bind="checked:isDeliverySame "/></span></div></div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputEmail1">First Name<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:firstNameD" class="form-control small" name="firstNameD" id="firstNameD" placeholder="First Name"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputPassword1">Last Name<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:lastNameD " class="form-control" name="lastNameD" id="lastNameD" placeholder="Last Name"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Company</label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:companyD " name="companyD" id="companyD" class="form-control" placeholder="Company"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Address<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:addressD " name="addressD" id="addressD" class="form-control" placeholder="Address line here"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">City<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value: cityD" name="cityD" id="cityD" class="form-control" placeholder="city"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Country<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:countryD " name="countryD" id="countryD" class="form-control" placeholder="Country"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4"><label for="exampleInputFile">Postal Code<sup style="color: red;">*</sup></label></div>
                                        <div class="col-sm-8"><input type="text" data-bind="value:postalCodeD " name="postalCodeD" id="postalCodeD" class="form-control" placeholder="Postal Code"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div id="headingFour" role="tab" class="panel-heading">
                <span>Step 4: Contact Details </span>
                <h4 class="panel-title">
                    <a aria-controls="collapseFour" aria-expanded="true" href="#collapseFour" data-parent="#accordion" data-toggle="collapse" class="">
                        Modyfy <i class="fa fa-angle-double-right"></i>
                    </a>
                </h4>
            </div>
            <div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse in" id="collapseFour" aria-expanded="true" style="height: 0px;">
                <div class="panel-body">
                    <div class="col-md-6 padding"> 
                        <div class="form-group">
                            <div class="col-sm-4"><label for="exampleInputEmail1">Primary<sup style="color: red;">*</sup></label></div>
                            <div class="col-sm-8"><input type="text" data-bind="value:contactPrimary" class="form-control small" name="contactPrimary" id="contactPrimary" placeholder="Mobile / Phone"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"><label for="exampleInputPassword1">Other</label></div>
                            <div class="col-sm-8"><input type="text" data-bind="value:contactOther " class="form-control" id="contactOther" placeholder="Other"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="table-responsive" style="margin-top:20px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Custom commercial RugBuilder.com- All Rights Reserved and Desigend By</td>
                    <td>Product 6</td>
                    <td>1</td>
                    <td>$299.00</td>
                    <td>$299.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Sub-Total:</td>
                    <td>$299.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Flat Shipping Rate:</td>
                    <td>$5.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total:</td>
                    <td>$304.00</td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning" data-bind="click:addAddress" type="button" style="float: right; background:#ff8275;">Confirm Order</button>


    </div>

</div>

<?php echo $this->Html->script(array('jquery.validate.min')); ?>
<script type="text/javascript">
    var BillingVM = function() {
        var me = this;
        me.id = null;
        me.savedAddress = ko.observableArray(<?php echo json_encode($savedadds); ?>);
        me.firstName = ko.observable('');
        me.lastName = ko.observable('');
        me.city = ko.observable('');
        me.country = ko.observable('');
        me.address = ko.observable('');
        me.postalCode = ko.observable('');
        me.company = ko.observable('');
        me.isDeliverySame = ko.observable(false);
        me.firstNameD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.firstName();
            }
        }, this);
        me.lastNameD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.lastName();
            }
        }, this);
        me.cityD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.city();
            }
        }, this);
        me.countryD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.country();
            }
        }, this);
        me.addressD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.address();
            }
        }, this);
        me.postalCodeD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.postalCode();
            }
        }, this);
        me.companyD = ko.computed(function() {
            if (this.isDeliverySame()) {
                return this.company();
            }
        }, this);

        me.contactPrimary = ko.observable();
        me.contactOther = ko.observable();
        me.validator = null;
        me.init = function() {
            me.validator = $('#billCRX').validate({
                rules: {
                    firstName: "required",
                    lastName: "required",
                    city: "required",
                    country: "required",
                    address: "required",
                    postalCode: "required",
                    firstNameD: "required",
                    lastNameD: "required",
                    cityD: "required",
                    countryD: "required",
                    addressD: "required",
                    postalCodeD: "required",
                    contactPrimary: "required"
                },
                messages: {
                    firstName: "Please enter first name.",
                    lastName: "Please enter last name.",
                    city: "Please enter city name.",
                    country: "Please select country.",
                    address: "Please enter your complete address.",
                    postalCode: "Please fill Postal Code.",
                    firstNameD: "Please enter first name.",
                    lastNameD: "Please enter last name.",
                    cityD: "Please enter city name.",
                    countryD: "Please select country.",
                    addressD: "Please enter your complete address.",
                    postalCodeD: "Please fill Postal Code.",
                    contactPrimary: "Please enter a primary Contact No."
                }
            });
        }
        me.selectAdd = function(d,e){
            var a = me.savedAddress()[0].Billingadd;
            for(i in a){
              console.log(i);
              try{
                    if(typeof me[i] == 'object'){
                      me[i] = a[i];
                    }
                    if(typeof me[i] == 'function'){
                      me[i](a[i]);
                    }
                }catch(e){
                    console.log(e);
                }
            }
        }
        me.validate = function() {
            return me.validator.form();
        }
        me.addAddress = function() {
            var r = me.validate();
            if (r) {
                if (me.id == null) {
                    var d = {
                        Billingadd: {
                            firstName: me.firstName(),
                            lastName: me.lastName(),
                            city: me.city(),
                            country: me.country(),
                            address: me.address(),
                            postalCode: me.postalCode(),
                            firstNameD: me.firstNameD(),
                            lastNameD: me.lastNameD(),
                            cityD: me.cityD(),
                            countryD: me.countryD(),
                            addressD: me.addressD(),
                            postalCodeD: me.postalCodeD(),
                            contactPrimary: me.contactPrimary(),
                            contactOther: me.contactOther(),
                            isDeliverySame: me.isDeliverySame()
                        }
                    }

                    $.post("/Billingadds/addNewAddress?_=" + (new Date()).getTime(), {data: d}, function(d2) {
                        $.post("/cart/billAddOnOrder?_=" + (new Date()).getTime(), {id: d2.Billingadd.id}, function(d3) {
                            if (d3 == 1) {
                                $.post("/cart/makepayment?_=" + (new Date()).getTime(), function(d4) {
                                    if (d4.error == 0) {
                                        window.location = d4.data
                                    } else {
                                        alert(d4.data);
                                    }
                                });
                            }
                        });
                    });
                }else{
                    $.post("/cart/billAddOnOrder?_=" + (new Date()).getTime(), {id: me.id}, function(d3) {
                            if (d3 == 1) {
                                $.post("/cart/makepayment?_=" + (new Date()).getTime(), function(d4) {
                                    if (d4.error == 0) {
                                        window.location = d4.data
                                    } else {
                                        alert(d4.data);
                                    }
                                });
                            }
                        });
                }
            }
            console.log(r);
        }
        me.init();
    }
    var billingObj = new BillingVM();
    $(document).ready(function() {
        ko.applyBindings(billingObj);
    });
</script>
<style type="text/css">
    .clickable-ad{
        margin: 40px 5px 5px 5px;
        border: 1px #EEEEEE solid;
        border-radius: 4px;
        box-shadow: 0px 1px 5px #EEEEEE;
        padding: 4px;
    }
    .clickable-ad:hover {
        background: green;
        color: white;
    }
</style>