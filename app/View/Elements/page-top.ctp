<div class="col-sm-12">
    <div class="top_text">
        <div class="col-sm-4">
            <div class="left_top">
                <p>Free* shipping to INDIA  / EASY RETURNS TAXES & DUTIES PAID*</p>
            </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <nav class="right-nav">
                <ul>
                    <li><a href="#">Custom Rugs</a></li>
                    <li><a href="/users/cart">Shopping Cart</a></li>
                    <li><a href="/users/billing">Checkout</a></li>
                    <?php if (!$authUser) { ?>
                        <li><a href="<?php echo $this->Html->url('/users/login'); ?>">Login</a></li>
                        <li><a href="<?php echo $this->Html->url('/users/add'); ?>">Sign Up</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $this->Html->url('/users/account'); ?>">My-Account</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>