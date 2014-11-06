<div>
    <h2>Address</h2>
    <hr>
    <div class="col-md-6 padding">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-12"><h4>Billing Address</h4></div>
                <form role="form">
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputEmail1">First Name<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:firstName" class="form-control small" id="" placeholder="First Name"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputPassword1">Last Name<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:lastName " class="form-control" id="" placeholder="Last Name"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Company</label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:company " id="" class="form-control" placeholder="Company"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Address<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:address " id="" class="form-control" placeholder="Address line here"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">City<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value: city" id="" class="form-control" placeholder="city"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Country<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:country " id="" class="form-control" placeholder="Country"></div>
                    </div>
                    <div class="form-group">
                       <div class="col-sm-4"><label for="exampleInputFile">Postal Code<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:postalCode " id="" class="form-control" placeholder="Postal Code"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 padding">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-12"><div class="col-sm-6 padding"><h4>Delivery Address</h4></div>
                    <div class="col-sm-6 padding">
<span style="font-size: 10px; color: #ccc; display: block" class="pull-right">Same as billing address <input type="checkbox" style="display: block; -webkit-appearance: checkbox !important;" data-bind="checked:isDeliverySame "/></span></div></div>
                <form role="form">
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputEmail1">First Name<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:firstNameD" class="form-control small" id="" placeholder="First Name"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputPassword1">Last Name<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:lastNameD " class="form-control" id="" placeholder="Last Name"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Company</label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:companyD " id="" class="form-control" placeholder="Company"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Address<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:addressD " id="" class="form-control" placeholder="Address line here"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">City<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value: cityD" id="" class="form-control" placeholder="city"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Country<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:countryD " id="" class="form-control" placeholder="Country"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4"><label for="exampleInputFile">Postal Code<sup style="color: red;">*</sup></label></div>
                        <div class="col-sm-8"><input type="text" data-bind="value:postalCodeD " id="" class="form-control" placeholder="Postal Code"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-12 padding">
        <div class="panel panel-default">
            <div class="col-md-6 padding"> 
                <div class="col-md-12"> <h4>Contact</h4></div>
                <div class="form-group">
                    <div class="col-sm-4"><label for="exampleInputEmail1">Primary<sup style="color: red;">*</sup></label></div>
                    <div class="col-sm-8"><input type="text" data-bind="value:contactPrimary" class="form-control small" id="" placeholder="Mobile / Phone"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4"><label for="exampleInputPassword1">Other</label></div>
                    <div class="col-sm-8"><input type="text" data-bind="value:contactOther " class="form-control" id="" placeholder="Other"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <br>
                <button class="btn btn-success pull-right" >Proceed to Pay</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    var BillingVM = function() {
        var me = this;
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
    }
    var billingObj = new BillingVM();
    $(document).ready(function() {
        ko.applyBindings(billingObj);
    });
</script>