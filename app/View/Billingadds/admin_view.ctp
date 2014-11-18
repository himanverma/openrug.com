<div class="billingadds view">
<h2><?php echo __('Billingadd'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($billingadd['User']['username'], array('controller' => 'users', 'action' => 'view', $billingadd['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($billingadd['Billingadd']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Billingadd'), array('action' => 'edit', $billingadd['Billingadd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Billingadd'), array('action' => 'delete', $billingadd['Billingadd']['id']), array(), __('Are you sure you want to delete # %s?', $billingadd['Billingadd']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Billingadds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billingadd'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
