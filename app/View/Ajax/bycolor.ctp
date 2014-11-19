

    <div class="row">

        <div class="col-sm-12"><br/>
            <h1>Rugs by Colour : <img src="<?php echo $this->Html->url("/swatch/".$color.".png"); ?>" onerror="this.src = '/swatch/'+swt['<?php echo $color; ?>'].file" style="height: 16px;" /></h1>
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
            <div class="row">
                <?php foreach ($popularGenrugs as $popularGenrug) { ?>
                    <div class="col-sm-2 col-xs-6" >
                        <div class="pro">
                            <a href="<?php echo $this->Html->url('/rugs/editor/' . $popularGenrug['Genrug']['rug_id']); ?>">
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

                <?php }  if(count($popularGenrugs) == 0){ ?>
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
</style>