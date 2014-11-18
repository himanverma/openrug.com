<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Update-Mailtemplate</h3>
    </div>
    <?php echo $this->Form->create('Mailtemplate'); ?>
        <div class="box-body">
	<?php
                echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo '<div class="select status required"><lable for="MailtemplateStatus">Status &nbsp</lable>';
                    echo $this->Form->select('status', array('1' => 'Active', '0' => 'Deactive'));
                echo '</div>';
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
