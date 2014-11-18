<li>
    <table class="table-responsive">
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
            <td>
                <a href="/rugs/bycolor/<?php echo $code; ?>">
                    <img style="width:16px; height: 16px; margin: 0 2px;" class="trig-clr2" data-clr="#<?php echo $code; ?>" src="<?php echo $this->Html->url("/swatch/".$name); ?>" alt="" /> 
                </a>
            </td>
            <?php
            if ($cnt == 40) {
                echo '</tr>';
                $cnt = 0;
            }
            $cnt++;
        }
        ?>

    </table>

    <style type="text/css">
        .trig-clr2:hover {
            cursor: pointer;
            box-shadow: 0 0 4px rgba(55,55,55,0.6);
        }
    </style>  
    <script type="text/javascript">
        $(document).ready(function() {
            $('img').attr({'alt': 'im'});
        });
    </script>
</li>