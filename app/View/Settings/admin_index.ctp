<div class="row">
    <div class=" col-lg-11">
    <div class="box box-primary" >
        <div class="box-header"><h3>Global Settings</h3></div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Key</td>
                        <td>Value</td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($settings as $s){ ?>
                    <tr>
                        <td><?php echo $s['Setting']['name']; ?></td>
                        <td>
                            <textarea data-id="<?php echo $s['Setting']['id']; ?>" name="data[Setting][value]"><?php echo $s['Setting']['value']; ?></textarea>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            
        </div>
    </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('textarea').on("change",function(){
            var me  = $(this);
            me.attr("readonly","readonly");
            me.css({"background":"grey"});
            $.post("?q=11",{'data[Setting][id]':me.data('id'),'data[Setting][value]':me.val()},function(){
                me.removeAttr('readonly');
                me.css({"background":"white"});
            });
        })
    });
</script>    