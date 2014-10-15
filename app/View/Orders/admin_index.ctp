<div class="banners">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th><?php echo $this->Paginator->sort('sessionid'); ?></th>
                <th><?php echo $this->Paginator->sort('timestamp'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions" style="text-align: center;"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo ($order['Order']['id']); ?>&nbsp;</td>
		<td>
                    <?php 
                    if($order['Order']['user_id']=='0'){
                        echo "Guest-User";
                    }else{
                        echo $this->Html->link($order['User']['username']
                        , array('controller' => 'users', 'action' => 'view', $order['User']['id'])); 
                    }?>&nbsp;
                </td>
		<td><?php echo $order['Order']['sessionid']; ?>&nbsp;</td>
		<td><?php echo ($order['Order']['timestamp']); ?>&nbsp;</td>
		<td><?php echo ($order['Order']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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