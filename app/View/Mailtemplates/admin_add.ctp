<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add new Mailtemplate</h3>
    </div>
    <?php echo $this->Form->create('Mailtemplate'); ?>
        <div class="box-body">
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.6/tinymce.min.js" ></script>
<script type="text/javascript">
tinymce.init({
    selector: 'textarea',
    theme: "modern" 
});
</script>

