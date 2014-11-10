<div class="order">
    <h1>Order-List</h1>
    <?php foreach($orderLists as $orderList){ ?>
    <strong>NO <?php echo $orderList['Order']['id']; ?></strong>
    <span>Rs $<?php echo $orderList['Order']['gross_total']; ?></span>
    <p><?php echo date("d-M-Y h:i A",$orderList['Order']['timestamp']); ?></p>
    <?php foreach ($orderList['Inlineitem'] as $order){ ?>
    <div class="order_item">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <strong>Shipmet#1[2 items] <button class="btn btn-xs btn-success" type="button"><?php echo $orderList['Order']['status'];?></button></strong>
            <p>
                <?php if($orderList['Order']['delivery_date']){
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
    <?php }}?>

</div>