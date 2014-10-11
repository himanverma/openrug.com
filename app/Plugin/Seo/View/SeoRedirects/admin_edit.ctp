<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoRedirects form">
	<?php echo $this->Form->create('SeoRedirect');?>
		<fieldset>
			<legend><?php echo __('Admin Edit Seo Redirect'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('SeoUri.uri');
			echo $this->Form->input('redirect');
		?>
			<em>Redirect via SeoAppError->catch404() will always be 301.</em>
		<?php
			echo $this->Form->input('priority');
			echo $this->Form->input('is_active');
			echo $this->Form->input('is_nocache', array(
				'label' => 'Instruct the browser to not cache the 301 redirect via cache headers.',
			));
		?>
		<?php
			echo $this->Form->input('callback');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
</div>
