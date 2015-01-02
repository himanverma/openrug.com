<div class="col-sm-8">
<table>
    <tr>
        <td>
            <table cellspacing="0" cellpadding="2">
                <?php
                $dir = new DirectoryIterator("swatch");
                $cnt = 1;
                $ar = array();
                foreach ($dir as $fl) {
                    if (!$fl->isDot()) {
                        if (!$fl->isDir()) {
                            $name = $fl->getFilename();
                            $num = explode("-", $name);
                            $ar[(int) $num[0]] = $name;
                        }
                    }
                }
                ksort($ar);
                /* $tst = array();
                  for($i = 1; $i <= 600; $i++){
                  $name = $ar[$i];
                  $code = rtrim($name, ".png");
                  $code = explode("-", $code);
                  $code = $code[1];
                  $tst[$code] = array("file" => $ar[$i],"id"=>$i);
                  }
                  echo json_encode($tst);
                  exit; */
                for ($i = 1; $i <= 600; $i++) {
                    $name = $ar[$i];
                    $code = rtrim($name, ".png");
                    $code = explode("-", $code);
                    $code = $code[1];
                    if ($cnt == 1)
                        echo '<tr>';
                    ?>
                    <td><img style="width:16px; height: 16px;" class="trig-clr" data-clr="#<?php echo $code; ?>" src="<?php echo $this->Html->url("/swatch/" . $name); ?>" alt=""> </td>
                    <?php
                    if ($cnt == 20) {
                        echo '</tr>';
                        $cnt = 0;
                    }
                    $cnt++;
                }
                ?>

            </table>
        </td>
    </tr>
</table></div>
<div class="col-sm-4">
    
    <div class="nn">
            <p>Replacement</p><br />
            <img align="" src="" class="swt-over" style="height:70px; width: auto;" /><br />
            <br />
            
            <p>Current</p><br />
            <img align="" src="" style="height:70px; width: auto;" class="swt-current" /><br />
        </div>
</div>

<style type="text/css">
    .edit_color td{
        padding: 0.5px;
        font-size: 8px;
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
<script type="text/javascript">
    $(document).ready(function() {
        $('img').attr({'alt': 'im'});
    });
</script>