<?php
    //debug($staticpages);
?>

<div class="row">
    <div class="col-lg-12">
    <?php foreach ($staticpages as $s){ ?>
    <div class="box box-primary collapsed-box">
        <div class="box-header">
            <div  class="box-title">
            <?php echo $s['Staticpage']['title']; ?>
            <br>(<?php echo $s['Staticpage']['slug']; ?>)
            </div>
            <div class="box-tools pull-right">
                <button data-widget="collapse" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                <a href="<?php echo $this->Html->url('/admin/Staticpages/edit/'.$s['Staticpage']['id']); ?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
            </div>
        </div>
        <div class="box-body" style="display: none;">
            <?php echo $s['Staticpage']['content']; ?>
        </div>
    </div>
    <?php } ?>
    </div>
</div>