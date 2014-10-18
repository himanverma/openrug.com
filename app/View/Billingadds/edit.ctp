<div class="billingadds form">
<?php echo $this->Form->create('Billingadd'); ?>
	<fieldset>
		<legend><?php echo __('Edit Billingadd'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Billingadd.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Billingadd.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Billingadds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
