<?php echo $this->Form->create('User');?>
<div class="profile">
    <h1>My Profile</h1>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="form_new">
            <span class="col-sm-6"><label>Name*</label></span>
            <span class="col-sm-6">
                <?php echo $this->Form->input('full_name',array('label'=>'','div'=>FALSE))?>
            </span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"><label>Username*</label></span>
            <span class="col-sm-6">
                <?php echo $this->Form->input('username',array('label'=>'','div'=>FALSE,'readonly'))?>
            </span> 
        </div>
        <div class="form_new">
            <span class="col-sm-6"><label>Email*</label></span>
            <span class="col-sm-6">
                <?php echo $this->Form->input('email',array('label'=>'','div'=>FALSE,'readonly'))?>
            </span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"><label>Password*</label></span>
            <span class="col-sm-6">
                <input type="text" value="*****" readonly="readonly">
                <a href="<?php echo $this->Html->url('/users/changepass'); ?>">Edit Password</a>
            </span>
        </div>
        <div class="form_new">
            <span class="col-sm-6"></span>
            <span class="col-sm-6"><button class="btn btn-warning" type="submit">Save</button></span>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<?php echo $this->Form->end();?>


