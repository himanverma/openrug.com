<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Change-Password</h3>
    </div>
    <?php echo $this->Form->create('User'); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('old_password', array('type' => 'password'));
        echo $this->Form->input('cpassword', array('type' => 'password'));
        echo $this->Form->input('new_password', array('type' => 'password'));
        ?>
    </div>
    <div class="box-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
