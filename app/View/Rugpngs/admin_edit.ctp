<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Edit Rugpng Template</h3>
    </div>
    <?php 
    echo $this->Form->create('Rugpng', array('type' => 'file')); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('rug_id');
        echo $this->Html->image('../'.$rugFile['Rugpng']['path'],array('height'=>'100','width'=>'100'));
        echo $this->Form->input('path', array('type' => 'file'));
        echo $this->Form->input('type');
        echo $this->Form->input('shape',array(
                    'class'=>"form-control",
                    'type'=>'select',
                    'options' => array(
                        'Rectangle' => 'Rectangle',
                        'Circle' => 'Circle',
                        'Oval' => 'Oval',
                        'Square' => 'Square',
                        'Runners' => 'Runners'
                    )
                ));
         echo $this->Form->input('timestamp',array('type'=>'hidden','value'=>date('D, d M Y H:i:s T')));?> 
    </div>
    <div class="box-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
