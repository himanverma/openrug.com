<div class="row">
    <div class="col-sm-12"><br/>
        <div class="row">
            <?php echo $this->element("pager-common", array("title" => "popular rug designs", "visible" => true)); ?>
        </div>
        <div class="row">
            <?php
            if ($view != "list") {
                foreach ($recentGenrugs as $recentGenrug) {
                    ?>
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
                    <?php
                }
            } else {
                foreach ($recentGenrugs as $recentGenrug) {
                    ?>
                    <div class="cart_list_view">
                        <div class="col-sm-12">
                            <div class="col-sm-2">
                                <img src="/<?php echo $recentGenrug['Genrug']['path'] . "pre.png"; ?>" class="img-thumbnail" width="100%" />
                            </div>
                            <div class="col-sm-3">
                                <div class="list_small_images">
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "runner.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "round.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "rect.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "round1.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "rect2.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $recentGenrug['Genrug']['path'] . "square1.png"; ?>" class="img-thumbnail" width="100%" />
                                </div>
                            </div>


                            <div class="col-sm-7">
                                <a href="<?php echo $this->Html->url('/rugs/editor/' . $recentGenrug['Genrug']['rug_id'] . "/" . $recentGenrug['Genrug']['colorstamp']); ?>">
                                    <h1><?php echo $recentGenrug['Genrug']['name'] . "(" . $recentGenrug['Genrug']['colorstamp'] . ")"; ?></h1>
                                </a>
                                <span class="list_price_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="cstamp-list" data-bind="swatch:{'clrstamp':'<?php echo $recentGenrug['Genrug']['colorstamp']; ?>'}"></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="list_price">
                                                <strong>$ 17.00/sq.ft.</strong>
                                                <div class="add_cart add_cart_list">
                                                    <div class="col-sm-9 padding">
                                                        <span>
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <a id="1" data-discount="5" data-cstamp="4273b9-98b9c6" data-rid="5" data-price="17.00" class="addtocart" href="javascript:void()">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

    </div>
</div>

