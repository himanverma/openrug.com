<div class="rugpngs view">
<h2><?php echo __('Rugpng'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rugpng['Rugpng']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rug'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rugpng['Rug']['name'], array('controller' => 'rugs', 'action' => 'view', $rugpng['Rug']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($rugpng['Rugpng']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($rugpng['Rugpng']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shape'); ?></dt>
		<dd>
			<?php echo h($rugpng['Rugpng']['shape']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rugpng'), array('action' => 'edit', $rugpng['Rugpng']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rugpng'), array('action' => 'delete', $rugpng['Rugpng']['id']), array(), __('Are you sure you want to delete # %s?', $rugpng['Rugpng']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rugpngs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rugpng'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rugs'), array('controller' => 'rugs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rug'), array('controller' => 'rugs', 'action' => 'add')); ?> </li>
	</ul>
</div>
