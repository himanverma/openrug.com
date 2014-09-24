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
           if($cnt == 15 ){
                echo '</tr>';         
                $cnt = 0;
           }
           $cnt++;
            }}       
        }
    ?>
    
</table>