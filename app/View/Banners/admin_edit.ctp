<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add new Banner Template</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php echo $this->Form->create('Banner',array('type'=>'file')); ?>
        <div class="box-body">
	<?php
		echo $this->Form->input('image',array('type'=>'file'));
		echo $this->Form->input('title');
		echo $this->Form->input('description');
                echo '<div class="select role required"><lable for="UserStatus">Status &nbsp</lable>';
                    echo $this->Form->select('status', array('1' => 'Active', '0' => 'Deactive'));
                echo "</div>";
	?>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
