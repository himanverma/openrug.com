<div class="order">
    <div class="col-sm-9">
    <h1>Order-List</h1>
    <?php if($orderLists){?>
    <?php foreach($orderLists as $orderList){ ?>
    <strong>NO <?php echo $orderList['Order']['id']; ?></strong>
    <span>Rs $<?php echo $orderList['Order']['gross_total']; ?></span>
    <p><?php echo date("d-M-Y h:i A",$orderList['Order']['timestamp']); ?></p>
    <?php foreach ($orderList['Inlineitem'] as $order){ ?>
    <div class="order_item">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <strong>Shipment#1[2 items] <button class="btn btn-xs btn-success" type="button"><?php echo $orderList['Order']['status'];?></button></strong>
            <p>
                <?php
                if($orderList['Order']['paypal_data_raw']){
                    $paymentRecords=json_decode($orderList['Order']['paypal_data_raw']);
//                    foreach($paymentRecords as $paymentRecord){
                        echo $paymentRecords->ACK;
//                    }
                    echo $orderList['Order']['delivery_date'];
                }else{
                    echo 'Pending';
                }?>
            </p>
            <div class="order_image">
                <a href="<?php echo $this->Html->url('/rugs/editor/'.$order['genrug_id'].'/'.$order['colors'].'/'.$order['shape']);?>">
                    <img width="40" height="40"
                        src="<?php echo $this->Html->url('/files/gen/'.$order['genrug_id'].'/'.$order['colors'].'/'.$order['shape']);?>.png" alt="">
                </a>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <?php }}}else{
        echo "<br/><br/><br/><center><b>No order!!!</b></center>";
    }?>
    </div>
    <div class="col-sm-3">
        <div class="myaccount_right">
            <h1>My account</h1>
            <ul>
                <li><a href="/users/account">My Account</a></li>
                <li><a href="/users/info">Edit Account</a></li>
                <li><a href="/users/changepass">Password</a></li>
                <li><a href="#">Address Books</a></li>


                <li><a href="#">View your created rugs</a></li>
                <li><a href="#">View your bespoke designs</a></li>
                <li><a href="/users/order">View your customized rug orders</a></li>
                <li><a href="#">View your strike-off order</a></li>
                <li><a href="#">View your sample card orders</a></li>
                <li><a href="/users/logout">Logout</a></li>
            </ul>
        </div>            
    </div>

</div>