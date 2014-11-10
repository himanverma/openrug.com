<?php echo $this->Form->create('User');?>
<div class="profile">
    <h1>Change-Password</h1>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="form_new">
            <span class="col-sm-6"><label>Old-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('old_password', array('type' => 'password','label'=>'','required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"><label>New-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('cpassword', array('type' => 'password','label'=>'','required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"><label>Confirm-Password*</label></span>
            <span class="col-sm-6"><?php echo $this->Form->input('new_password', array('type' => 'password','label'=>'','required'));?></span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"></span>
            <span class="col-sm-6"><button class="btn btn-warning" type="submit">Save</button></span>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<?php echo $this->Form->end();?>