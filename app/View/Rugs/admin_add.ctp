<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add new Rug Template</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php echo $this->Form->create('Rug',array('type'=>'file')); ?>
        <div class="box-body">
            <?php
            
                echo $this->Form->input('name',array(
                    'class'=>"form-control"
                ));
                echo $this->Form->input('description',array(
                    'class'=>"form-control"
                ));
                echo $this->Form->input('pattern',array(
                    'class'=>"form-control",
                    'type'=>'select',
                    'options' => array(
                        'Abstract' => 'Abstract',
                        'Animal Print' => 'Animal Print',
                        'Borders' => 'Borders',
                        'Check' => 'Check',
                        'Circles' => 'Circles',
                        'Contemporary' => 'Contemporary',
                        'Damask' => 'Damask',
                        'Geometry' => 'Geometry',
                        'Flags' => 'Flags',
                        'Gradient' => 'Gradient',
                        'Graphic' => 'Graphic',
                        'Natural' => 'Natural',
                        'Plain' => 'Plain',
                        'Stripes' => 'Stripes',
                        'Traditional' => 'Traditional'
                    )
                ));
                echo $this->Form->input('price',array(
                    'class'=>"form-control"
                ));
                echo $this->Form->input('discount');
                echo $this->Form->input("path.",array(
                    'label'=>'Select Rug Pattern Layers',
                    'type'=>'file',
                    'multiple'
                ));
                
                echo $this->Form->input("pathbg",array(
                    'label'=>'Select Rug Background Layers',
                    'type'=>'file'
                ));
                
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
                //echo $this->Form->input('timestamp');
                
            ?>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
