<div class="col-sm-12 padding">
    <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} position out of {:count} total, starting on position {:start}, ending on {:end}')
            ));
            ?>	</p>
        <div class="paging">
            <?php
            echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
        </div>
                            <div class="pro_right">


                                <?php
                                foreach ($rugDiscounts2 as $rug) {
                                    foreach ($rug['Genrug'] as $genrug) {
                                        ?>
                                        <a href="<?php echo $this->Html->url('/rugs/editor/' . $rug['Rug']['id'] . "/" . $genrug['colorstamp']); ?>">
                                            <div class="col-md-2 col-sm-4 col-xs-6">
                                                <div class="product_main">
                                                    <img alt="" src="<?php echo $this->Html->url('../' . $genrug['path'] . "pre.png"); ?>">
                                                    <p><?php echo $rug['Rug']['description']; ?></p>
                                                    <div class="add_cart2">
                                                        <span><i class="fa fa-shopping-cart"></i><a href="#">Add to Cart</a></span>
                                                        <div class="rupee">
                                                            <?php
                                                            $aa = ($genrug['price'] * $rug['Rug']['discount']) / 100;
                                                            $bb = $genrug['price'] - $aa;
                                                            ?>
                                                            <p>$<?php echo $bb; ?>   <span>$<?php echo $genrug['price']; ?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                }
                                ?>
                            </div>    
                        </div>