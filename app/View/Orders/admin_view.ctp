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
		<dt><?php echo __('Rugs-Item'); ?></dt>
		<dd>
                        <?php $count=0; foreach($order['Inlineitem'] as $rugItem){
                            echo $this->Html->image('../'.$rugItem['Genrug']['path'].$rugItem['shape'].'.png',array('height'=>'100','width'=>'100'));
                            if($count==4){
                                echo "<br/>";
                            }
                        }?>
		</dd>
		<dt><?php echo __('Order-Time'); ?></dt>
		<dd>
			<?php echo date("Y-m-d H:i:s",strtotime($order['Order']['timestamp']));?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment-Status'); ?></dt>
		<dd>
			<?php echo ($order['Order']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order-Status'); ?></dt>
		<dd>
			<?php echo ($order['Order']['order_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shiping Details'); ?></dt>
		<dd>
			<?php echo ($order['Order']['shiping_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Tracking'); ?></dt>
		<dd>
			<?php echo ($order['Order']['order_tracking']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
