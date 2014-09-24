<div class="rugs view">
<h2><?php echo __('Rug'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pattern'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['pattern']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rug'), array('action' => 'edit', $rug['Rug']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rug'), array('action' => 'delete', $rug['Rug']['id']), array(), __('Are you sure you want to delete # %s?', $rug['Rug']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rugs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rug'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rugpngs'), array('controller' => 'rugpngs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rugpng'), array('controller' => 'rugpngs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rugpngs'); ?></h3>
	<?php if (!empty($rug['Rugpng'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rug Id'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Shape'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rug['Rugpng'] as $rugpng): ?>
		<tr>
			<td><?php echo $rugpng['id']; ?></td>
			<td><?php echo $rugpng['rug_id']; ?></td>
			<td><?php echo $rugpng['path']; ?></td>
			<td><?php echo $rugpng['type']; ?></td>
			<td><?php echo $rugpng['shape']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rugpngs', 'action' => 'view', $rugpng['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rugpngs', 'action' => 'edit', $rugpng['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rugpngs', 'action' => 'delete', $rugpng['id']), array(), __('Are you sure you want to delete # %s?', $rugpng['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rugpng'), array('controller' => 'rugpngs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
