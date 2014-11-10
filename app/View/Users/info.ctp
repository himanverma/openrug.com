<?php echo $this->Form->create('User'); ?>
<div class="profile">
    <div class="col-sm-9">
        <h1>My Profile</h1>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="form_new">
                <span class="col-sm-6"><label>Name*</label></span>
                <span class="col-sm-6">
                    <?php echo $this->Form->input('full_name', array('label' => '', 'div' => FALSE)) ?>
                </span>
            </div>
            <div class="form_new">
                <span class="col-sm-6"><label>Username*</label></span>
                <span class="col-sm-6">
                    <?php echo $this->Form->input('username', array('label' => '', 'div' => FALSE, 'readonly')) ?>
                </span> 
            </div>
            <div class="form_new">
                <span class="col-sm-6"><label>Email*</label></span>
                <span class="col-sm-6">
                    <?php echo $this->Form->input('email', array('label' => '', 'div' => FALSE, 'readonly')) ?>
                </span>
            </div>
            <div class="form_new">
                <span class="col-sm-6"></span>
                <span class="col-sm-6"><button class="btn btn-warning" type="submit">Save</button></span>
            </div>
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


