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
        ?>
        
        <div class="edit_color swatch-picker" style="width: 12%">
            <label for="RugpngColor">Color</label>
            <?php echo $this->Form->input('color',array('type'=>'hidden'));?>
            <img class="input-im" src="tst" onerror="this.src = '/swatch/' + swt['<?php echo $this->request->data['Rugpng']['color']; ?>'].file" alt="">
            <div class="swatch-pick" style="top:0; left: 0">
                <?php echo $this->element("swatch"); ?>
            </div>
        </div>
         <?php 
         echo $this->Form->input('timestamp',array('type'=>'hidden','value'=>date('D, d M Y H:i:s T')));?> 
    </div>
    <div class="box-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.swatch-picker').hover(function(){
            $(this).find('.swatch-pick').show();
            $(this).css({'box-shadow':'0 0 4px rgba(55,55,55,0.6)'});
        },function(){
            $(this).find('.swatch-pick').hide();
            $(this).css({'box-shadow':'none'});
        });
        
        $('.trig-clr').on("click",function(){
            var clr = $(this).data().clr ; 
            clr = clr.replace("#","");
            console.log($(this).parents('.edit_color'));
            $(this).parents('.edit_color').find('input').val(clr);
            $(this).parents('.edit_color').find('.input-im').attr({src: '<?php echo $this->Html->url('/swatch/');?>' + swt[clr].file});
            $('.swatch-pick').hide();
        });
    });
</script>        