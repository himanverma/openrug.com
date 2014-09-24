<div class="rugpngs form">
<?php echo $this->Form->create('Rugpng'); ?>
	<fieldset>
		<legend><?php echo __('Add Rugpng'); ?></legend>
	<?php
		echo $this->Form->input('rug_id');
		echo $this->Form->input('path');
		echo $this->Form->input('type');
		echo $this->Form->input('shape');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rugpngs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rugs'), array('controller' => 'rugs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rug'), array('controller' => 'rugs', 'action' => 'add')); ?> </li>
	</ul>
</div>
