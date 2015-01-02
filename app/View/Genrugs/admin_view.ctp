<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Genrug View Template</h3>
    </div>
    <div class="box-body">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pattern'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['pattern']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timestamp'); ?></dt>
		<dd>
			<?php echo h($genrug['Genrug']['timestamp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>