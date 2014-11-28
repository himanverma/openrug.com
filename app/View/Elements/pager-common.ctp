<div class="col-lg-3">
    <?php if(isset($visible)){ ?>
    <h1><?php echo $title; ?></h1>
    <?php } ?>
</div>
<div class="col-lg-9">
    <div class="dataTables_paginate paging_bootstrap" style="float:right;">
        <ul class="pagination">
            <li <?php if ($view == "list") { echo 'class="active"';} ?> >
                <a href="<?php echo $this->request->here; ?>?view=list" data-toggle="tooltip" data-placement="top" title="Change to List View"><i class="fa fa-list"></i></a>
            </li>
            <li <?php if ($view != "list") { echo 'class="active"';} ?> >
                <a href="<?php echo $this->request->here; ?>?view=grid" data-toggle="tooltip" data-placement="top" title="Change to Grid View"><i class="fa fa-th"></i></a>
            </li> 
        </ul>
        <ul class="pagination">
            <li>
                <a href="#">Sort By:</a>
            </li>
            <li <?php if ($this->Paginator->sortKey() == "price") { ?>class="active"<?php } ?>>
                <?php echo $this->Paginator->sort("price", " PRICE", array('tag' => 'li', 'class' => 'fa fa fa-sort-amount-' . $this->Paginator->sortDir())); ?>
            </li>
            <li <?php if ($this->Paginator->sortKey() == "timestamp") { ?>class="active"<?php } ?>>
                <?php echo $this->Paginator->sort("timestamp", " DATE", array('tag' => 'li', 'class' => 'fa fa fa-sort-amount-' . $this->Paginator->sortDir())); ?>
            </li>
            <li <?php if ($this->Paginator->sortKey() == "name") { ?>class="active"<?php } ?>>
                <?php echo $this->Paginator->sort("name", " NAME", array('tag' => 'li', 'class' => 'fa fa fa-sort-alpha-' . $this->Paginator->sortDir())); ?>
            </li>
        </ul>

        <ul class="pagination" >
            <?php
            //echo $this->Paginator->sort('Rug.price', "Price", array('class' => "glyphicon glyphicon-sort btn btn-primary"));

            echo $this->Paginator->first(__('<< First', true), array('tag' => 'li'), array('tag' => 'li', 'class' => 'number-first'));
            echo $this->Paginator->prev('< ', array('tag' => 'li', 'disabledTag' => 'a'), null, array('disabledTag' => 'a', 'tag' => 'li', 'class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', "modulus" => 5));
            echo $this->Paginator->next(' >', array('tag' => 'li', 'disabledTag' => 'a'), null, array('disabledTag' => 'a', 'tag' => 'li', 'class' => 'next disabled'));
            echo $this->Paginator->last(__('>> Last', true), array('tag' => 'li'), array('tag' => 'li', 'class' => 'number-first'));
            ?>
        </ul>
    </div>
</div>