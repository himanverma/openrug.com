<?php 

echo $this->Paypal->button('Add To Cart', array('test'=>true,'type' => 'addtocart', 'amount' => '15.00'));
echo $this->Paypal->button('View Cart', array('test'=>true,'type' => 'viewcart', 'amount' => '15.00'));