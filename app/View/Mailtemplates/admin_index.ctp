<div class="banners">
	<h2><?php echo __('Mailtemplates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('Title'); ?></th>
                <th><?php echo $this->Paginator->sort('Description'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions" style="text-align: center;"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mailtemplates as $mailtemplate): ?>
	<tr>
		<td><?php echo ($mailtemplate['Mailtemplate']['id']); ?>&nbsp;</td>
		<td><?php echo $mailtemplate['Mailtemplate']['title']; ?>&nbsp;</td>
		<td><?php echo ($mailtemplate['Mailtemplate']['description']); ?>&nbsp;</td>
		<td><?php echo ($mailtemplate['Mailtemplate']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mailtemplate['Mailtemplate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mailtemplate['Mailtemplate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mailtemplate['Mailtemplate']['id']), array(), __('Are you sure you want to delete # %s?', $mailtemplate['Mailtemplate']['id'])); ?>
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