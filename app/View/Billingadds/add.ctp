<div class="billingadds form">
<?php echo $this->Form->create('Billingadd'); ?>
	<fieldset>
		<legend><?php echo __('Add Billingadd'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('pin_code');
		echo $this->Form->input('state');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Billingadds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
