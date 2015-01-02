<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Update-Order</h3>
    </div>
    <?php echo $this->Form->create('Order'); ?>
        <div class="box-body">
	<?php
                echo $this->Form->input('shiping_details');
                echo $this->Form->input('order_tracking');
		echo '<div class="select status required"><lable for="OrderStatus">Status &nbsp</lable>';
                    echo $this->Form->select('order_status', array('Complete' => 'Complete', 'Pending' => 'Pending'));
                echo '</div>';
	?>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
