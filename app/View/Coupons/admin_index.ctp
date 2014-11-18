<div class="users">
	<h2><?php echo __('Coupon'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('No.'); ?></th>
			<th><?php echo $this->Paginator->sort('Coupon Code'); ?></th>
			<th><?php echo $this->Paginator->sort('Type'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('Valid title'); ?></th>
			<th><?php echo $this->Paginator->sort('Status'); ?></th>
			<th class="actions" style="text-align: center;"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $count = 1; foreach ($coupons as $coupon): ?>
	<tr>
		<td><?php echo $count++; ?>&nbsp;</td>
		<td><?php echo ($coupon['Coupon']['coupon_code']); ?>&nbsp;</td>
		<td><?php echo ($coupon['Coupon']['type']); ?>&nbsp;</td>
		<td><?php echo ($coupon['Coupon']['value']); ?>&nbsp;</td>
		<td><?php echo ($coupon['Coupon']['valid_title']); ?>&nbsp;</td>
		<td><?php if($coupon['Coupon']['status']==1){echo "Active";}else{echo "Deactive";} ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coupon['Coupon']['id'])); ?>
			<?php 
                        echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coupon['Coupon']['id'])
                                , array(), __('Are you sure you want to delete # %s?', $coupon['Coupon']['id']));
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

