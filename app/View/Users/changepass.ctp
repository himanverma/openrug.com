<?php echo $this->Form->create('User');?>
<div class="profile">
    
    <div class="col-sm-9">
        <h1>Change-Password</h1>
        <div class="form_new">
            <span class="col-sm-3"><label>Old-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('old_password', array('type' => 'password','label'=>FALSE,'required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-3"><label>New-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('cpassword', array('type' => 'password','label'=>FALSE,'required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-3"><label>Confirm-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('new_password', array('type' => 'password','label'=>FALSE,'required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-3"></span>
            <span class="col-sm-6"><button class="btn btn-warning" type="submit">Save</button></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="myaccount_right">
            <h1>My account</h1>
            <ul>
                <li><a href="/users/account">My Account</a></li>
                <li><a href="/users/info">Edit Account</a></li>
                <li><a href="/users/changepass">Password</a></li>
                <li><a href="#">Address Books</a></li>
                <li><a href="#">View your created rugs</a></li>
                <li><a href="#">View your bespoke designs</a></li>
                <li><a href="/users/order">View your customized rug orders</a></li>
                <li><a href="#">View your strike-off order</a></li>
                <li><a href="#">View your sample card orders</a></li>
                <li><a href="/users/logout">Logout</a></li>
            </ul>
        </div>           
    </div>
</div>
<?php echo $this->Form->end(); ?>

</div>
<?php echo $this->Form->end();?>