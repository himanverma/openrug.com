<div class="col-sm-12">
    <div class="top_text">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            <nav class="right-nav">
                <ul>
                   <!-- <li><a href="#">Custom Rugs</a></li>
                    <li><a href="/rugs/cart">Shopping Cart</a></li>
                    <li><a href="/rugs/billing">Checkout</a></li>-->
                    <?php if (!$authUser) { ?>
                   <li><a style="color: #fff;" href="<?php echo $this->Html->url('/users/login'); ?>">Login</a></li>
                   <li style="border-right:0px !important;"><a style="color: #fff;" href="<?php echo $this->Html->url('/users/add'); ?>">Sign Up</a></li>
                    <?php } else { ?>
                        <li><a style="color: #fff;" href="<?php echo $this->Html->url('/users/account'); ?>">My-Account</a></li>
                        <li><a style="color: #fff;" href="<?php echo $this->Html->url('/users/logout'); ?>">Logout</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>