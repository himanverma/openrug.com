<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add Genrug Template</h3>
    </div>
    <?php echo $this->Form->create('Genrug'); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
        echo $this->Form->input('description');
        echo $this->Form->input('pattern');
        echo $this->Form->input('price');
        echo $this->Form->input('timestamp');
        ?>
    </div>
    <div class="box-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
