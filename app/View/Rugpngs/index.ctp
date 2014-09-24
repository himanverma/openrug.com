<div class="rugpngs index">
	<h2><?php echo __('Rugpngs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rug_id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('shape'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rugpngs as $rugpng): ?>
	<tr>
		<td><?php echo h($rugpng['Rugpng']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rugpng['Rug']['name'], array('controller' => 'rugs', 'action' => 'view', $rugpng['Rug']['id'])); ?>
		</td>
		<td><?php echo h($rugpng['Rugpng']['path']); ?>&nbsp;</td>
		<td><?php echo h($rugpng['Rugpng']['type']); ?>&nbsp;</td>
		<td><?php echo h($rugpng['Rugpng']['shape']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rugpng['Rugpng']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rugpng['Rugpng']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rugpng['Rugpng']['id']), array(), __('Are you sure you want to delete # %s?', $rugpng['Rugpng']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rugpng'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rugs'), array('controller' => 'rugs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rug'), array('controller' => 'rugs', 'action' => 'add')); ?> </li>
	</ul>
</div>
