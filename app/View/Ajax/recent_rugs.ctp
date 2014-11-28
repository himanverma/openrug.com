    <div class="row">
        <div class="col-sm-12"><br/>
            <div class="row">
                <?php echo $this->element("pager-common",array("title" => "popular rug designs","visible" => true)); ?>
            </div>
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
            
        </div>
    </div>

