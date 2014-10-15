<div class="banners">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php 
                            if($order['Order']['user_id']=='0'){
                                echo "Guest-User";
                            }else{
                                echo $this->Html->link($order['User']['username']
                                , array('controller' => 'users', 'action' => 'view', $order['User']['id'])); 
                            }?>&nbsp;
		</dd>
		<dt><?php echo __('Session-Id'); ?></dt>
		<dd>
			<?php echo ($order['Order']['sessionid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order-Time'); ?></dt>
		<dd>
			<?php echo ($order['Order']['timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo ($order['Order']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
