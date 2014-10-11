<div class="seoABTests view">
<h2><?php  echo __('Seo A B Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seo Uri'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seoABTest['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoABTest['SeoUri']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slot'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['slot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($seoABTest['SeoABTest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
