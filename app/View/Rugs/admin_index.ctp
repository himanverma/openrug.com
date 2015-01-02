<div class="rugs">
	<h2><?php echo __('Rugs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('pattern'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
                        <th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('timestamp'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rugs as $rug): ?>
	<tr>
		<td><?php echo h($rug['Rug']['id']); ?>&nbsp;</td>
		<td><?php echo h($rug['Rug']['name']); ?>&nbsp;</td>
		<td><?php echo h($rug['Rug']['description']); ?>&nbsp;</td>
		<td><?php echo h($rug['Rug']['pattern']); ?>&nbsp;</td>
		<td><?php echo h($rug['Rug']['price']); ?>&nbsp;</td>
                <td><?php echo $rug['Rug']['discount']."%"; ?>&nbsp;</td>
		<td><?php echo h($rug['Rug']['timestamp']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rug['Rug']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rug['Rug']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rug['Rug']['id']), array(), __('Are you sure you want to delete # %s?', $rug['Rug']['id'])); ?>
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
