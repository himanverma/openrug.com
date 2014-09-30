<table cellspacing="0" cellpadding="2">
    <?php 
    $dir = new DirectoryIterator("swatch");
    $cnt = 1;
        foreach ($dir as $fl){
            if (!$fl->isDot()) {
                if(!$fl->isDir()){
                    $name = $fl->getFilename();
                    $code = rtrim($name, ".png");
                    if($cnt == 1)
                        echo '<tr>';
                    ?>
    <td><img class="trig-clr" data-clr="#<?php echo $code; ?>" src="<?php echo $this->Html->url("/swatch/".$name); ?>" alt=""> </td>
    <?php
           if($cnt == 25 ){
                echo '</tr>';         
                $cnt = 0;
           }
           $cnt++;
            }}       
        }
    ?>
    
</table>

<style type="text/css">
    .edit_color td{
        padding: 2px
    }
    .swatch-pick{
        display: none;
        z-index: 99999; padding: 4px; position: absolute; 
        top: 30px; left: -150px; 
        background: #ffffff; 
        border-radius: 4px; 
        box-shadow: 0 0 4px rgba(50,50,50,0.6);
        border: 1px solid #ccc;
    }
    .swatch-picker {
        height: 32px;
        padding-bottom: 11px;
    }
    .trig-clr:hover {
        cursor: pointer;
        box-shadow: 0 0 4px rgba(55,55,55,0.6);
    }
</style>  