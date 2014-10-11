<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoUrls form">
	<?php echo $this->Form->create('SeoUrl');?>
		<fieldset>
			<legend><?php echo __('Admin Edit Seo Url'); ?></legend>
			<?php
				echo $this->Form->input('SeoUrl.id');
				echo $this->Form->input('SeoUrl.url');
				echo $this->Form->input('SeoUrl.priority');
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Save All'));?>
	</div>
</div>