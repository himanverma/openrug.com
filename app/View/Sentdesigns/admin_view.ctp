<div class="users">
<h2><?php echo __('Sentdesign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sentdesign['Sentdesign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sentdesign['User']['username'],
                                array('controller' => 'users', 'action' => 'view', $sentdesign['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo $sentdesign['Sentdesign']['title']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo $sentdesign['Sentdesign']['description']; ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Files'); ?></dt>
		<dd>
			<?php 
                        foreach($sentdesign['Sentimage'] as $file){
                            echo "<img src=".$file['path']." width=100% height=100%><br/><br/>";
                        }
                        ?>
		</dd>
		<dt><?php echo __('Admin Suggestion'); ?></dt>
		<dd>
			<?php echo $sentdesign['Sentdesign']['admin_suggestion']; ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Status'); ?></dt>
		<dd>
                        <?php if($sentdesign['Sentdesign']['status']==1){echo "Active";}else{echo "Deactive";} ?>
			&nbsp;
		</dd>
	</dl>
</div>
