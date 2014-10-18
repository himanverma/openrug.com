<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add New User</h3>
    </div>
    <?php echo $this->Form->create('User'); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('full_name');
        echo $this->Form->input('email');
        echo '<div class="select type required"><lable for="UserRole">Role &nbsp</lable>';
        echo $this->Form->select('type', array('admin' => 'Admin', 'user' => 'User'));
        echo "</div>";
        ?>
    </div>
    <div class="box-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>