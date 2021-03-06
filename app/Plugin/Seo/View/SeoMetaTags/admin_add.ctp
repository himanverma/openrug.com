<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoMetaTags form">
	<?php echo $this->Form->create('SeoMetaTag');?>
		<fieldset>
			<legend><?php echo __('Admin Add Seo Meta Tag'); ?></legend>
		<?php
			echo $this->Form->input('SeoUri.uri',array('options'=>$uris));
			echo $this->Form->input('name',array(
                            'options' => array(
                                "keywords" => "Keywords",
                                "description" => "Description",
                                "author" => "Author",
                                "content-type" => "content-type"
                            )
                        ));
			echo $this->Form->input('content');
			echo $this->Form->input('is_http_equiv');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
</div>