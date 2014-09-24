<div class="rugs form">
<?php echo $this->Form->create('Rug'); ?>
	<fieldset>
		<legend><?php echo __('Add Rug'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('pattern');
		echo $this->Form->input('price');
		echo $this->Form->input('timestamp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rugs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rugpngs'), array('controller' => 'rugpngs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rugpng'), array('controller' => 'rugpngs', 'action' => 'add')); ?> </li>
	</ul>
</div>
