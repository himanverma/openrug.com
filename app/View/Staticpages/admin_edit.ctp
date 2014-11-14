<?php 
$id = "";
if(isset($this->request->data['Staticpage'])){
    $id = $this->request->data['Staticpage']['id'];
}
?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.6/tinymce.min.js"></script>
<div class="row">
    <div class="col-lg-12">
        <?php echo $this->Form->create("Staticpage", array('url'=>'/admin/Staticpages/edit/'.$id)); ?>
        <div class="box box-primary">
            <div class="box-header"><h3>Add / Edit Pages</h3></div>
            <div class="box-body">
                <?php 
                    echo $this->Form->input("title", array(
                        'div' => array('class'=>'form-group'),
                        'class' => 'form-control'
                    ));
                    echo $this->Form->input("slug", array(
                        'div' => array('class'=>'form-group'),
                        'class' => 'form-control'
                    ));
                    echo $this->Form->input("content", array(
                        'div' => array('class'=>'form-group'),
                        'class' => 'form-control'
                    ))
                ?>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<script type="text/javascript">
    tinymce.init({selector:'textarea'});
    $('document').ready(function(){
        $('#StaticpageTitle').on("keyup",function(){
            var val = $(this).val();
            val = val.toLowerCase().replace(/\s/g, "-"); 
            $('#StaticpageSlug').val(val);
        });
       
    });
</script>