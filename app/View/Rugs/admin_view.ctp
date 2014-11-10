<div class="rugs">
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
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo $rug['Rug']['discount']."%"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($rug['Rug']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
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
                <th><?php echo __('Color'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rug['Rugpng'] as $rugpng): ?>
		<tr>
			<td><?php echo $rugpng['id']; ?></td>
			<td><?php echo $rugpng['rug_id']; ?></td>
			<td><?php echo $this->Html->image('../'.$rugpng['path'],array('height'=>'50','width'=>'50')); ?></td>
			<td><?php echo $rugpng['type']; ?></td>
			<td><?php echo $rugpng['shape']; ?></td>
                        <td><img src="tst" onerror="this.src = '/swatch/' + swt['<?php echo $rugpng['color']; ?>'].file" /></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rugpngs', 'action' => 'view', $rugpng['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rugpngs', 'action' => 'edit', $rugpng['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rugpngs', 'action' => 'delete', $rugpng['id']), array(), __('Are you sure you want to delete # %s?', $rugpng['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
