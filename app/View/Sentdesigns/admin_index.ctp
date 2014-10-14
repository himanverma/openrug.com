<div class="users">
	<h2><?php echo __('Sentdesign'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions" style="text-align: center;"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sentdesigns as $sentdesign): ?>
	<tr>
		<td><?php echo ($sentdesign['Sentdesign']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($sentdesign['User']['username'], array('controller' => 'users', 'action' => 'view', $sentdesign['User']['id'])); ?>&nbsp;</td>
		<td><?php echo ($sentdesign['Sentdesign']['title']); ?>&nbsp;</td>
		<td><?php echo ($sentdesign['Sentdesign']['description']); ?>&nbsp;</td>
		<td><?php if($sentdesign['Sentdesign']['status']==1){echo "Active";}else{echo "Deactive";} ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sentdesign['Sentdesign']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sentdesign['Sentdesign']['id'])); ?>
			<?php 
//                        echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sentdesign['Sentdesign']['id'])
//                                , array(), __('Are you sure you want to delete # %s?', $sentdesign['Sentdesign']['id']));
                        ?>
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
	?>
        </p>
        <div class="paging">
            <?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
	</div>
</div>

