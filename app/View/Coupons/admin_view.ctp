<div class="users">
<h2><?php echo __('Coupon'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Code'); ?></dt>
		<dd>
			<?php echo $coupon['Coupon']['coupon_code']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid Title'); ?></dt>
		<dd>
			<?php echo $coupon['Coupon']['valid_title']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo $coupon['Coupon']['value']; ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $coupon['Coupon']['type']; ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Status'); ?></dt>
		<dd>
                        <?php if($coupon['Coupon']['status']==1){echo "Active";}else{echo "Deactive";} ?>
			&nbsp;
		</dd>
	</dl>
</div>
