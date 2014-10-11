<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoStatusCodes form">
	<?php echo $this->Form->create('SeoStatusCode');?>
		<fieldset>
			<legend><?php echo __('Admin Edit Seo Status Code'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('SeoUri.uri');
			echo $this->Form->input('status_code', array('type' => 'select', 'options' => $status_codes));
			echo $this->Form->input('priority');
			echo $this->Form->input('is_active');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
</div>