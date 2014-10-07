<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Update User</h3>
    </div>
    <?php echo $this->Form->create('User', array('type' => 'file')); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('full_name');
        echo $this->Form->input('email');
        echo '<div class="select type required"><lable for="UserRole">Role &nbsp</lable>';
        echo $this->Form->select('type', array('admin' => 'Admin', 'user' => 'User'));
        echo "</div>";
        echo '<div class="select role required"><lable for="UserStatus">Status &nbsp</lable>';
        echo $this->Form->select('status', array('1' => 'Active', '0' => 'Deactive'));
        echo "</div>";
        ?>
        </fieldset>
        <div class="box-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>