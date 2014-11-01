<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'RugBuilder');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--        <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        echo $this->Html->charset() ."\n";
        echo $this->Seo->title($title_for_layout) ."\n";
        echo $this->Html->meta('icon') ."\n";
        echo $this->Seo->metaTags() ."\n";
        echo $this->Seo->canonical() ."\n";

        // echo $this->Html->css('cake.generic');

        echo $this->fetch('meta') ."\n";
        /*
          echo $this->Html->css(array(
          "bootstrap.min",
          "style",
          "/fonts/stylesheet",
          "/font-awesome/css/font-awesome",
          "bootstrap-theme.min",
          //"/font-awesome/css/font-awesome.min",
          "theme",
          ));
          echo $this->AssetCompress->addCss('bootstrap.min.css', 'style.css');
          echo $this->Html->script(array(
          "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
          "bootstrap.min",
          ));
         */
        echo $this->Html->script(array("http://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js"));
        $this->Combinator->add_libs('js', array(
            "jquery.min",
            "bootstrap.min",
            "jquery.form.min",
            "jquery.waiting.min",
            "/js/app/functions",
            "/js/app/custom.bindings",
            "/js/app/swt"
        ));
        $this->Combinator->add_libs('css', array(
            "bootstrap.min",
            "style",
            "/fonts/stylesheet",
            "font-awesome",
            "bootstrap-theme.min",
            "waiting"
                //"/font-awesome/css/font-awesome.min",
                //"theme",
        ));

        echo $this->Combinator->scripts('css'); // Output CSS files

        echo $this->Combinator->scripts('js'); // Output Javascript files

        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body role="document">
        
        <?php 
        echo $this->element("page-header");
        ?>
        <div class="main_con"> 
            <div class="container-fluid">
                <div class="con_inn">

                    <div class="col-sm-12">
                        <?php echo $this->fetch("content"); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo $this->element("page-footer");
        ?>
        <script>
            $(document).ready(function() {
                $(".down_arrow").click(function() {
                    $(".footer_menu").toggle();
                });
            });
        </script>
        <?php echo $this->Seo->honeyPot(); ?>
    </body>
</html>