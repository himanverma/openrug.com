    <div class="row">
        <div class="col-sm-12"><br/>
            <h1>recent rug designs</h1><br/><br/>
            <div class="row">
                <?php foreach ($recentGenrugs as $recentGenrug) { ?>
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <a href="<?php echo $this->Html->url('/rugs/editor/' . $recentGenrug['Genrug']['rug_id'] . "/" . $recentGenrug['Genrug']['colorstamp']); ?>">
                                <img src="/<?php echo $recentGenrug['Genrug']['path'] . "pre.png"; ?>" alt="">
                            </a>

                            <p><?php echo $recentGenrug['Genrug']['description']; ?></p>
                            <strong><?php echo $recentGenrug['Genrug']['description']; ?>$ <?php echo $recentGenrug['Genrug']['price']; ?>/sq.ft.</strong><!-- this is custom changes please edit correct code-->
                            <div class="add_cart">
                                <div class="col-sm-9 padding">
                                    <span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="javascript:void()" class="addtocart" 
                                           data-price="<?php echo $recentGenrug['Genrug']['price']; ?>"
                                           data-rid="<?php echo $recentGenrug['Rug']['id']; ?>"
                                           data-cstamp="<?php echo $recentGenrug['Genrug']['colorstamp']; ?>"
                                           data-discount="<?php echo $recentGenrug['Rug']['discount']; ?>"
                                           id="<?php echo $recentGenrug['Genrug']['id']; ?>">
                                            Add to Cart
                                        </a>
                                    </span>
                                </div>
                                <div class="col-sm-3 padding">
                                    <div class="view">
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dataTables_paginate paging_bootstrap" style="float:right;">
                        <ul class="pagination" >
                            <?php
                            //echo $this->Paginator->sort('Rug.price', "Price", array('class' => "glyphicon glyphicon-sort btn btn-primary"));

                            echo $this->Paginator->first(__('<< First', true), array('tag' => 'li'), array('tag' => 'li', 'class' => 'number-first'));
                            echo $this->Paginator->prev('< ', array('tag' => 'li', 'disabledTag' => 'a'), null, array('disabledTag' => 'a', 'tag' => 'li', 'class' => 'prev disabled'));
                            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a'));
                            echo $this->Paginator->next(' >', array('tag' => 'li', 'disabledTag' => 'a'), null, array('disabledTag' => 'a', 'tag' => 'li', 'class' => 'next disabled'));
                            echo $this->Paginator->last(__('>> Last', true), array('tag' => 'li'), array('tag' => 'li', 'class' => 'number-first'));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
