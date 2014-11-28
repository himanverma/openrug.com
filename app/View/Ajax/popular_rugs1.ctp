<div class="row">

    <div class="col-sm-12"><br/>
        <h1>rug of shape</h1>
        <div class="row">
            <?php echo $this->element("pager-common",array("title" => "recent rug designs")); ?>
        </div>
        <div class="row">
            <?php foreach ($popularGenrugs as $popularGenrug) { ?>
                <div class="col-sm-2 col-xs-6" >
                    <div class="pro">
                        <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Genrug']['rug_id'] . "/" . $popularGenrug['Genrug']['colorstamp'] . "/" . $shape); ?>">
                            <img src="/<?php echo $popularGenrug['Genrug']['path'] . $shape . ".png"; ?>" alt="">
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