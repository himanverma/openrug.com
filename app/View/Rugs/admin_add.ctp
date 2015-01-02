<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Add new Rug Template</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php echo $this->Form->create('Rug', array('type' => 'file')); ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('name', array(
            'class' => "form-control"
        ));
        echo $this->Form->input('description', array(
            'class' => "form-control"
        ));
        echo $this->Form->input('pattern', array(
            'class' => "form-control",
            'type' => 'select',
            'options' => array(
                "ANM" => "Animal Print Rugs",
                "AZN" => "Asian Rugs", 
                "BRD" => "Braided Rugs",
                "BRDR" => "Border Rugs",
                "DSN" => "Designer Rugs",
                "FLR" => "Floral Rugs",
                "GB" => "Gabbeh Rugs",
                "HILO" => "Textured Rugs",
                "KID" => "Kids Rugs",
                "KLM" => "Flat Woven Rugs",
                "ODD" => "Odd Shaped Rugs",
                "OUT" => "Outdoor Rugs",
                "SHG" => "Shag Rugs",
                "SLD" => "Solid Rugs",
                "STR" => "Striped Rugs",
                "SW" => "Southwestern Rugs",
                "TBT" => "Tibetan Rugs",
                "TRD" => "Traditional Rugs",
                "COW" => "Cowhide Rugs",
                "ECO" => "Natural Fiber Rugs",
                "FLT" => "Felt Rugs",
                "LTH" => "Leather Rugs",
                "POLY" => "Acrylic Rugs",
                "SHP" => "Sheepskin Rugs",
                "SILK" => "Silk Rugs",
                "WL" => "Wool Rugs",
                "TTH" => "Thick yarn threads",
                "PRT" => "Patterned Rugs",
                "ART" => "Modern Abstract Rugs",
                "THM" => "Medium-thick yarns",
                "THT" => "Thin yarn threads",
                "PHH" => "High pile height",
                "PHM" => "Medium pile height",
                "PHL" => "Low pile height",
                "POP" => "Pop Art Rugs",
                "TRN" => "Transitional Rugs",
                "COT" => "Cotton Rugs",
                "DYE" => "Overdyed Rugs",
            )
        ));
        echo $this->Form->input('price', array(
            'class' => "form-control"
        ));
        echo $this->Form->input('discount');
        echo $this->Form->input("path.", array(
            'label' => 'Select Rug Pattern Layers',
            'type' => 'file',
            'multiple'
        ));

        echo $this->Form->input("pathbg", array(
            'label' => 'Select Rug Background Layers',
            'type' => 'file'
        ));

        echo $this->Form->input('shape', array(
            'class' => "form-control",
            'type' => 'select',
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
