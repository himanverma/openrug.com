

    <div class="row">

        <div class="col-sm-12"><br/>
            <h1>Rugs by Colour : <img src="<?php echo $this->Html->url("/swatch/".$color.".png"); ?>" onerror="this.src = '/swatch/'+swt['<?php echo $color; ?>'].file" style="height: 16px;" /></h1>
            <div class="row">
                <?php echo $this->element("pager-common",array("title" => "recent rug designs")); ?>
            </div>
            <div class="row">
                <?php 
                if ($view != "list") {
                foreach ($popularGenrugs as $popularGenrug) { ?>
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Genrug']['rug_id'] . "/" . $popularGenrug['Genrug']['colorstamp']); ?>">
                                <img src="/<?php echo $popularGenrug['Genrug']['path'] . "pre.png"; ?>" alt="">
                            </a> 
                            <p><?php echo $popularGenrug['Genrug']['description']; ?></p>
                            <strong><?php echo $popularGenrug['Genrug']['description']; ?>$ <?php echo $popularGenrug['Genrug']['price']; ?>/sq.ft.</strong><!-- this is custom changes please edit correct code-->
                            <div class="add_cart">
                                <div class="col-sm-9 padding">
                                    <span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="javascript:void()" class="addtocart"
                                           data-price="<?php echo $popularGenrug['Genrug']['price']; ?>"
                                           data-rid="<?php echo $popularGenrug['Rug']['id']; ?>"
                                           data-cstamp="<?php echo $popularGenrug['Genrug']['colorstamp']; ?>"
                                           data-discount="<?php echo $popularGenrug['Rug']['discount']; ?>"
                                           id="<?php echo $popularGenrug['Genrug']['id']; ?>">
                                            Add to Cart
                                        </a>
                                    </span>
                                </div>
                                <div class="col-sm-3 padding">
                                    <div class="view">
                                        <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Genrug']['rug_id']); ?>">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
                }else {
                foreach ($popularGenrugs as $popularGenrug) {
                    ?>
                    <div class="cart_list_view">
                        <div class="col-sm-12">
                            <div class="col-sm-2">
                                <img src="/<?php echo $popularGenrug['Genrug']['path'] . "pre.png"; ?>" class="img-thumbnail" width="100%" />
                            </div>

                            <div class="col-sm-3">
                                <div class="list_small_images">
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "runner.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "round.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "rect.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "round1.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "rect2.png"; ?>" class="img-thumbnail" width="100%" />
                                    <img src="/<?php echo $popularGenrug['Genrug']['path'] . "square1.png"; ?>" class="img-thumbnail" width="100%" />
                                </div>
                            </div>


                            <div class="col-sm-7">
                                <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Genrug']['rug_id'] . "/" . $popularGenrug['Genrug']['colorstamp']); ?>">
                                    <h1><?php echo $popularGenrug['Genrug']['name'] . "(" . $popularGenrug['Genrug']['colorstamp'] . ")"; ?></h1>
                                </a>
                                <span class="list_price_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <p class="cstamp-list" data-bind="swatch:{'clrstamp':'<?php echo $popularGenrug['Genrug']['colorstamp']; ?>'}"></p>
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
            }  if(count($popularGenrugs) == 0){ ?>
                <div class="col-lg-12">
                    <center>
                        <h2>No Results Found...</h2>
                        <h3>Please choose another color.</h3>
                    </center>
                </div>
                <?php } ?>
            </div>
            
            
        </div>
    </div>
<style type="text/css">
    .pagination .current a {
        background: blue;
        color: #fff;
    }
    .cstamp-list img {
        margin: 4px;
        height: 30px;
        width: 30px;
    }

    .list_price{
        width: 100%;
        float: left;
    }
    .cart_list_view {
        border-bottom: 1px solid #f1f1f1;
        float: left;
        padding: 20px 0;
        width: 100%;
    }
    .list_small_images img {
        float: left;
        margin-right: 8px;
        margin-bottom: 20px;
        width: 80px;
        height: 65px;
    }
    .list_price_p {
        float: left;
        height: 42px;
        margin: 5px 0;
        overflow: hidden;
        width: 100%;
    }
</style>