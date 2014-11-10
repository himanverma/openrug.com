<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Rugpng View Template</h3>
    </div>
    <div class="box-body">
        <dl>
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($rugpng['Rugpng']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Rug'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rugpng['Rug']['name'], array('controller' => 'rugs', 'action' => 'view', $rugpng['Rug']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Type'); ?></dt>
            <dd>
                <?php echo h($rugpng['Rugpng']['type']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Path'); ?></dt>
            <dd>
                <?php echo $this->Html->image('../'.$rugpng['Rugpng']['path'],array('height'=>'100','width'=>'100')); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Shape'); ?></dt>
            <dd>
                <?php echo h($rugpng['Rugpng']['shape']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Color'); ?></dt>
            <dd style="background: #<?php echo $rugpng['Rugpng']['color']?>">
                <?php echo (" &nbsp #".$rugpng['Rugpng']['color']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>
</div>